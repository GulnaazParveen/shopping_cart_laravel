<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Products2;



class PageController extends Controller
{
    public function homePage(){
        $allProducts=Product::all();
        $allProductsAgain=Products2::all();

        return view('home',compact('allProducts','allProductsAgain'));
    }
    public function shopPage(){
        return view('shop');
    }
    public function shopcartPage(){
        $cartItem=DB::table('products')
        ->join('carts','carts.productId','products.id')
        ->select('products.title','products.picture','products.price')
        ->where('carts.customerId',session()->get('id'))
        ->get();
        return view('shoppingCart',compact('cartItem'));
    }
    public function shopDetailsPage($id){
        $product=Product::find($id);
        return view('addToCart',compact('product'));
    }
    public function userLogin(){
        return view('login');
    }
    public function signup(){
        return view('register');
    }
    public function logout(){
        session()->forget('id');
        session()->forget('type');
        return redirect('/login');
    }
    public function loginUser(Request $data){
        $user=User::where('email',$data->input('email'))->where('password',$data->input('password'))->first();
        if($user){
                session()->put('id',$user->id);
                session()->put('type',$user->type);
                if($user->type=='Customer');{
                    return redirect('/');
                }

        }else{
            return redirect('login')->with('error','Email/password is incorrect.');
        }
    }
    public function registerUser(Request $data){
        $newUser = new User();
        $newUser->email=$data->input('email');
        $newUser->password=$data->input('password');
        $newUser->type="Customer";
        if($newUser->save()){
            return redirect('login')->with('success','congratulations! Your account is ready');
        }
    }
    public function addToCartFun(Request $data){
        if(session()->has('id')){
            $item=new Cart();
           $item->productId=$data->input('id');
           $item->customerId=session()->get('id');
           $item->save();
           return redirect()->back()->with('success','congratulations!item added into cart');
        }
        else{
            return redirect('login')->with('error','info! please Login to System');
        }
    }
}
