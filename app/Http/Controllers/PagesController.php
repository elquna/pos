<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\Activitylog;
use App\Models\Stock;
use App\Models\Cart;
use App\Models\Order;



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


      public function  processaddstock(Request $request)
      {
          $this->sessionchecker();

          $product = Product::where('id',$request->productid)->first();
          
          $stock = new Stock();
          $stock->product_id = $request->productid;
          $stock->quantity = $request->quantity;
          $stock->category_id = $product->category_id;
          $stock->branch_id = session('branch_id');
          $stock->added_by = session('id');
          $stock->save();

          $product->remaining = $product->remaining + $request->quantity;
          $product->save();
       
      
          $action  = "Added stock of product : ". $product->name ;
          $this->auditLogger($action, $stock, $request->ip());
         
        
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

      public function addstockform()
      {
        $pr =  Product::where('branch_id', session('branch_id'))->get();
        return view('admin.AddStockForm')->with(['pr'=>$pr]);
      }


      public function viewstocks()
      {
        $st =  Stock::where('branch_id', session('branch_id'))->get();
        return view('admin.ViewStock')->with(['st'=>$st]);
      }

      public function viewstocksavailable()
      {
        $this->sessionchecker();

        $pr =  Product::where('branch_id', session('branch_id'))->where('trashed',0)->orderby('id','desc')->where('remaining','>',0)->get();
        foreach($pr as $p)
        {
        
          $p->category = Category::where('id',$p->category_id)->first();
        }
        return view('admin.AvailableStock')->with(['products'=>$pr]);
      }

      public function makesales()
      {
        $this->sessionchecker();
        $pr =  Product::where('branch_id', session('branch_id'))->where('trashed',0)->orderby('id','desc')->get();
        
        $cartsession  = time().substr(str_shuffle("ABCDEFGHIJKLMNOP"),-2);
        return view('admin.MakeSales')->with(['cartsession'=>$cartsession, 'pr'=>$pr]);
        
      }
  
      public function showaproductduringsale(Request $request)
      {
        $this->sessionchecker();
        $pro = Product::where('id',$request->productid)->first();
        return view('admin.ShowaProductDuringSale')->with(['pro'=>$pro]);
      }

      public function showaproductduringsalewithcode(Request $request)
      {
        $this->sessionchecker();
        $pro = Product::where('slug',$request->rcode)->first();
        return view('admin.ShowaProductDuringSale')->with(['pro'=>$pro]);
      }

      public function processaddtocart(Request $request)
      {
        $this->sessionchecker();
        $product =  Product::where('id', $request->productid)->first();

        $cart = new Cart();
        $cart->quantity = $request->qty;
        $cart->price = $product->price;
        $cart->product_id = $request->productid;
        $cart->subtotal = $product->price * $request->qty;
        $cart->cartsession = $request->serial;
        $cart->save();

        $all = Cart::where('cartsession', $cart->cartsession)->orderby('id','desc')->get();
        

        return view('admin.Cart')->with(['all'=>$all]);
      }

      public function barcode($serial)
      {
        $pro =  Product::where('slug',$serial)->first();
        return view('admin.Barcode')->with(['pro'=>$pro]);
      }


      public function processcheckout(Request $request)
      {
        $this->sessionchecker();
        $order = new Order();

        $pullcart = Cart::where('cartsession',$request->serial)->get();
        $sum = Cart::where('cartsession',$request->serial)->sum('subtotal');

        $order->cartsession = $request->serial;
        $order->subtotal = $sum;
        $order->paymethod = $request->paymentmethod;
        $order->address = $request->address;
        $order->customer_name = $request->customer_name;
        $order->added_by  =  session('name');
        $order->user_id = session('id');
        $order->branch_id = session('branch_id');
        $order->phone = $request->phone;
        try{
        $order->save();

            if($order!= NULL)
            {
               foreach($pullcart as $one)
               {
                $pro = Product::where('id', $one->product_id)->first();
                $pro->remaining = $pro->remaining - $one->quantity;
                $pro->save();
               }

               $action  = "Made sales with code : ". $request->serial ;
               $this->auditLogger($action, $order, $request->ip());
            }
        }
        catch(\Exception $e){

        }

        

        
      }

    public function printreceipt($serial)
    {
      $pullcart = Cart::where('cartsession',$serial)->with('product')->get();
      $order = Order::where('cartsession', $serial)->first();
      return view('admin.Print')->with(['pullcart'=>$pullcart, 'order'=>$order]);
    }

    public function deletefromcart(Request $request)
    {
      $this->sessionchecker();
      $cart = Cart::where('id', $request->id)->first();
      if($cart != NULL)
      {
        $cart->delete();
      }
      $all = Cart::where('cartsession', $request->cartsession)->orderby('id','desc')->get();
      return view('admin.Cart')->with(['all'=>$all]);
    }


    public function saleshistory()
    {
        $today = date("Y-m-d");
        

        $orders = Order::where('created_at','LIKE',"%{$today}%")->get();
        $sum  = Order::where('created_at','LIKE',"%{$today}%")->sum('subtotal');

        return view('admin.ViewSales')->with(['orders'=>$orders, 'tot'=>$sum]);
    }

    
    public function flexiblehistory()
    {
      
        

        $orders = Order::orderby('id','desc')->take(100)->get();
        $sum = Order::orderby('id','desc')->take(100)->sum('subtotal');
        

        return view('admin.FlexibleSales')->with(['orders'=>$orders, 'tot'=>$sum]);
    }



  






}
