<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    function index(){
        $data = Product::all();
        return view('product',['products'=>$data]);
    }
    function detail($id)
    {
        $data = Product::find($id);
        return view('detail',['product'=>$data]); 
    }
    function search(Request $req){
        // return $req->input();
        $data = Product::where('name','like','%'.$req->input('query').'%')->get();
        return view('search',['products'=>$data]); 
    }
    //card table дээр user_id ,product_id оруулах
    function addToCart(Request $req){
        if($req->session()->has('user'))
        {
            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');
        }
        else{
            return redirect('/login');
        }
    }
    //cart({{$total}})
    static function cartItem(){
        $userId = Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }

    function cardList(){
        $userId = Session::get('user')['id'];
        $data =  DB::table('cart')
        ->join('products','cart.product_id','products.id')
        ->select('products.*','cart.id as cart_id')
        ->where('cart.user_id',$userId)
        ->get();
        
        return view('cartlist',['products'=>$data]);
    }
    function removeCart($id)
    {
        echo Cart::destroy($id); 
        return redirect('cardlist');
    }
    function orderNow()
    {
        $userId = Session::get('user')['id'];
        $total = DB::table('cart')
        ->join('products','cart.product_id','products.id')
        ->where('cart.user_id',$userId)
        ->sum('products.price');
        
        return view('ordernow',['total'=>$total]);
    }
}
