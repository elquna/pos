<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\Activitylog;


class PagesController extends Controller
{


      private function sessionchecker()
      {
             if(!session('id'))
             {
                 echo "expired session, please log in again";
                 return;
             }

      }

      private function auditLogger($action, $object, $ip)
      {
        $au = new Activitylog();
        $au->user_id = session('id');
        $au->name =session('name');
        $au->action = $action;
        $au->object = $object;
        $au->ip = $ip;
        $au->branch_id =session('branch_id');
        $au->save();
      }
  

      public function login()
      {
        return view('admin.login');
      }


      public function processlogin(Request $request)
      {
              $email = $request->input('email');
              $password = $request->input('password');

                  if (Auth::attempt(['email'=>$email,'password'=>$password]))
                  {
                      $user = Auth::user();
                      session(['id'=>$user->id]);
                      session(['name'=>$user->firstname. " ".$user->lastname]);
                      session(['branch_id'=>$user->branch_id]);
                      
                      echo "yea";

                  }
                  else{
                      return response()->json(['error'=>'Authentication failed', 'message'=>'Invalid login details', "error_code"=>"N0009"],200);
                  }
      }



      public function dashboard(Request $request)
      {
            if(session('id'))
            {
              $user = User::where('id',session('id'))->first();

             return view('admin.dashboard')->with(['staff'=>$user]);
            }
            else{
                return redirect()->route('home');
            }
      }

      public function formforuser(Request $request)
      {
             $this->sessionchecker();
             return view('admin.Formforuser')->with([]);
      }

      public function processaddnewuser(Request $request)
      {
        $this->sessionchecker();
        $user = new User();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->password = bcrypt($request->password);
        $user->truncate = base64_encode(time().$request->password);
        $user->phone = $request->phone;
        $user->role = 2;
        $user->address = $request->address;
        $user->branch_id = session('branch_id');
        $user->email = $request->email;
        try {
          $user->save();
          $action  = "Added user with name : ". $user->firstname ;
          $this->auditLogger($action, $user, $request->ip());
        } catch (\Throwable $th) {
          //throw $th;
        }
       
        

      }

      public function viewusers()
      {
        $this->sessionchecker();

        $users =  User::where('branch_id', session('branch_id'))->where('id','>',1)->get();
        return view('admin.ViewUsers')->with(['users'=>$users]);
      }


      public function addcat(Request $request)
      {
             $this->sessionchecker();
             return view('admin.Addcat')->with([]);
      }

      public function  processaddcategory(Request $request)
      {
        $this->sessionchecker();
        $catcheck = Category::where(['category'=>$request->cat, 'branch_id'=>session('branch_id')])->first();
        if($catcheck == NULL)
        {
          $cat = new Category();
          $cat->branch_id = session('branch_id');
          $cat->category = $request->cat;
          $cat->save();

          $action  = "Added category with name : ". $cat->category ;
          $this->auditLogger($action, $cat, $request->ip());
        }
        
      }


      public function viewcat()
      {
        $this->sessionchecker();
        $cat =  Category::where('branch_id', session('branch_id'))->get();
        return view('admin.ViewCat')->with(['cat'=>$cat]);
      }


      public function addproductform()
      {
        $cat =  Category::where('branch_id', session('branch_id'))->get();
        return view('admin.AddProductForm')->with(['cat'=>$cat]);
      }
     

      public function processaddproduct(Request $request)
      {
        $this->sessionchecker();
        $pcheck = Product::where(['category_id'=>$request->catid, 'branch_id'=>session('branch_id'), 'name'=>$request->name])->first();
        if($pcheck == NULL)
        {
          $pr = new Product();
          $pr->branch_id = session('branch_id');
          $pr->category_id = $request->catid;
          $pr->price = $request->price;
          $pr->added_by = session('id');
          $pr->slug = substr(str_shuffle("ABCDEFGHIJKLMNOPQRST"),-3).time();
          $pr->name = $request->name;
          $pr->save();

          $action  = "Added Product with name : ". $pr->name ;
          $this->auditLogger($action, $pr, $request->ip());
        }
        
      }

      public function viewproducts()
      {
        $this->sessionchecker();

        $pr =  Product::where('branch_id', session('branch_id'))->where('trashed',0)->orderby('id','desc')->get();
        foreach($pr as $p)
        {
          $p->added = User::where('id',$p->added_by)->first();
          $p->category = Category::where('id',$p->category_id)->first();
        }
        return view('admin.ViewProducts')->with(['products'=>$pr]);
      }



  






}
