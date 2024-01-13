<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;


class PagesController extends Controller
{
      public function home()
      {
        {
             $deal = Product::where(['Live'=>1, 'Approved'=>1, 'Trashed'=>0])->where('Price','>',0)->inRandomOrder()->paginate(12); 
             $feature =  Product::where(['Live'=>1, 'Approved'=>1, 'Trashed'=>0])->inRandomOrder()->paginate(24); 
             $mostrated =  Product::where(['Live'=>1, 'Approved'=>1, 'Trashed'=>0])->where('Price','>',0)->inRandomOrder()->paginate(10);
             $onsale =  Product::where(['Live'=>1, 'Approved'=>1, 'Trashed'=>0])->where('Price','!=',0)->inRandomOrder()->paginate(3);
             $onsale2 =  Product::where(['Live'=>1, 'Approved'=>1, 'Trashed'=>0])->where('Price','!=',0)->inRandomOrder()->paginate(3);
             $onsale3 =  Product::where(['Live'=>1, 'Approved'=>1, 'Trashed'=>0])->where('Price','!=',0)->inRandomOrder()->paginate(3);
             return view('front.Home_Page')->with(['deal'=>$deal, 'feature'=>$feature, 'mostrated'=>$mostrated, 'onsale'=>$onsale, 'onsale2'=>$onsale2, 'onsale3'=>$onsale3]);
        }
      }



      private function sessionchecker()
      {
             if(!session('id'))
             {
                 echo "expired session, please log in again";
                 return;
             }

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






}
