<?php

namespace App\Http\Controllers;


use App\Donut;
use App\Events\FormSubmitted;
use App\FeedBack;
use App\Cart;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Stripe\Charge;
use Stripe\Stripe;
class FrontEndController extends Controller
{
    public function menu(){
        $donuts = DB::table('donuts')->where('type', 'like', '%Donuts')->get();
        $fancy_donuts = DB::table('donuts')->where('type', 'like', '%Fancy Donuts')->get();
        $croissants = DB::table('donuts')->where('type', 'like', '%Croissant')->get();
        $pastries = DB::table('donuts')->where('type', 'like', '%Pastries')->get();
        return view('FrontEnd.menu',['donuts'=>$donuts,'fancy_donuts'=>$fancy_donuts,'croissants'=>$croissants,'pastries'=>$pastries]);
    }

    public function contact(){
        return view('FrontEnd.contact');
    }

    public function add_feed(Request $request)
    {
        $this->validate($request, [
            'feedback_name' => 'required',
            'feedback_email' => 'required',
            'description' => 'required'
        ]);
        $feed = new FeedBack;
        $feed->feedback_name = $request->input('feedback_name');
        $feed->feedback_email = $request->input('feedback_email');
        $feed->description = $request->input('description');
        $feed->save();
        return redirect('/contact')->with('info1', 'FeedBack saved Successfully!');
    }

    public function getAddToCart(Request $request, $id){
        $donut = Donut::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($donut,$donut->id);
        $request->session()->put('cart',$cart);
        return redirect('/menu');
    }

    public function getReduceByOne($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduce($id);

        if(count($cart->items) > 0 ){
            Session::put('cart', $cart);
        }else{
            Session::forget('cart');
        }
        return redirect('/shopping_cart');
    }

    public function getRemoveAll($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        if(count($cart->items) > 0 ){
            Session::put('cart', $cart);
        }else{
            Session::forget('cart');
        }
        return redirect('/shopping_cart');
    }

    public function getCart(){
        if(!Session::has('cart')){
            return view('FrontEnd.shopping_cart',['donuts'=> null]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('FrontEnd.shopping_cart',['donuts'=> $cart->items,'totalPrice' => $cart->totalPrice]);
    }

    public function getCheckout(){
        if(!Session::has('cart')){
            return view('FrontEnd.shopping_cart',['donuts'=> null]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('FrontEnd.checkout', ['total' => $total]);
    }

    public function postCheckout(Request $request){
        if(!Session::has('cart')){
            return redirect('/shopping_cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        Stripe::setApiKey('sk_test_51HDb9jDgrUuP0oTPMNTsID4AljloW8VxEcoT36DrSK1YvCKxY5muKWYjIFJ4ShhGxfzoPTCzkmnnsrlkR7hy5gvV00E8dINYc1');
        try{
            $charge = Charge::create(array(
                'amount' => $cart->totalPrice * 100,
                'currency' => 'usd',
                'source' => $request->input('stripeToken'),
                'description' => 'Test Charge'
                ));
            $order = new Order();
            $order->cart = serialize($cart);
            $order->email =$request->input('email');
            $order->name =$request->input('name');
            $order->address =$request->input('address');
            $order->payment_id = $charge->id;
            $order->save();
            $text = request()->text;
            event(new FormSubmitted($text));
        }catch (\Exception $e){
            return redirect('/checkout')->with('error', $e->getMessage());
        }

        Session::forget('cart');
        return redirect('/menu')->with('success','Successfully Purchased!');
    }
}

