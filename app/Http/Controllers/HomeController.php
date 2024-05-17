<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
//use Session;
use Stripe;

class HomeController extends Controller
{

    public function index(){
        $product=product::paginate(6);
        return view('home.userpage',compact('product'));
    }
    
    public function redirect(){    
        $usertype=Auth::user()->usertype;
        if($usertype=='1'){
            return view('admin.home');  
        }
        else{
            $product=product::paginate(6);
            return view('home.userpage',compact('product'));
        }
    }

    public function product_details($id){
        $product=product::find($id);
        return view('home.product_details',compact('product'));
    }

    // public function add_cart(Request $request,$id){
    //     if(Auth::id()){
    //        $user=Auth::user();
    //        $product=product::find($id);
    //        $cart=new cart;
    //        $cart->name=$user->name;
    //        $cart->email=$user->email;
    //        $cart->phone=$user->phone;
    //        $cart->address=$user->address;
    //        $cart->user_id=$user->id;

    //        $cart->product_title=$product->title;
          
    //        if($product->discount_price !=null){
    //         $cart->price=$product->discount_price * $request->quantity;
    //        }
    //        else{
    //         $cart->price=$product->discount_price * $request->quantity;

    //        }
    //        $cart->image=$product->image;
    //        $cart->product_title=$product->title;
    //        $cart->product_id=$product->id;
    //        $cart->quantity=$request->quantity;
          
    //        $cart->save();
    //        return redirect()->back();
           
           
    //     }
    //     else{
    //         return redirect('login');  
    //     }
    // }
    public function add_cart(Request $request, $id){
        if(Auth::id()){
           $user = Auth::user();
           $product = Product::find($id);
    
           // Check if quantity is provided and is a positive integer
           if($request->has('quantity') && $request->quantity > 0){
               $quantity = $request->quantity;
           } else {
               // Redirect back with an error message if quantity is invalid
               return redirect()->back()->with('error', 'Invalid quantity');
           }
    
           $cart = new Cart;
           $cart->name = $user->name;
           $cart->email = $user->email;
           $cart->phone = $user->phone;
           $cart->address = $user->address;
           $cart->user_id = $user->id;
           $cart->product_title = $product->title;
           
           // Calculate price based on discount price if available
           if($product->discount_price != null){
               $cart->price = $product->discount_price * $quantity;
           } else {
               $cart->price = $product->price * $quantity;
           }
    
           $cart->image = $product->image;
           $cart->product_id = $product->id;
           $cart->quantity = $quantity;
          
           $cart->save();
           return redirect()->back();
        } else {
            return redirect('login');  
        }
    }
    

    public function show_cart(){

        if(Auth::id()){
        
            $id=Auth::user()->id;
        $cart=cart::where('user_id','=',$id)->get();

        return view('home.showcart',compact('cart'));
        }

        else{
            return redirect('login');
        }
        
    }
    
    public function checkout($totalPrice){
        return view('home.checkout',compact('totalPrice'));  
    }
    public function contact(){
        return view('home.contact');   
    }
    
    public function wishlist(){
        return view('home.wishlist');   
    }

    public function remove_cart($id){
        $cart=cart::find($id);
        $cart->delete();
        return redirect()->back()->with('message','product deleted Successfully');
    }

    public function cash_orderPost()
    {
    
        $user=Auth::user();
        $userid = $user->id;
        $data=cart::where('user_id','=',$userid)->get();

        foreach($data as$data){

            $order=new order;
            $order->name=$data->name;
            $order->email=$data->email;
            $order->phone=$data->phone;
            $order->address=$data->address;
            $order->user_id=$data->user_id;

            $order->product_title=$data->product_title;
            $order->price=$data->price;
            $order->quantity=$data->quantity;
            $order->image=$data->image;
            $order->product_id=$data->product_id;

            $order->payment_status='cash on delivery';
            $order->delivery_status=' processing ';

            $order->save();

           

            $cart_id = $data->id;
              $cart = Cart::find($cart_id);
             $cart->delete();


        }
        return redirect()->back()->with('message',' your order is recieved ');
     }

//========================================================= 
public function placeOrder(Request $request)
{
    
    $user = Auth::user();
    $cartItems = Cart::where('user_id', $user->id)->get();

    foreach ($cartItems as $cartItem) {
        $order = new Order();
        // Assign order details from cart item
        $order->user_id = $user->id;
        $order->product_id = $cartItem->product_id;
        // Assign other order details as needed
        // ...
        $order=new order;
        $order->name=$user->name;
        $order->email=$user->email;
        $order->phone=$user->phone;
        $order->address=$user->address;
        
        $order->product_title=$cartItem->product_title;
        $order->price=$cartItem->price;
        $order->quantity=$cartItem->quantity;
        $order->image=$cartItem->image;
        $order->product_id=$cartItem->product_id;

        $order->payment_status='cash on delivery';
        $order->delivery_status=' processing ';

        $order->save();


        

        // Delete the cart item
        $cartItem->delete();
    }

    // Redirect back to the checkout page with a success message
    // return redirect()->route('checkout')->with('message', '');
    return redirect()->back()->with('message',' Your order has been received. We will contact you soon.'); 
}
  //----------------------------------------------------------------------------------------------------------
    public function stripe($totalPrice){
        return view('home.stripe',compact('totalPrice'));
}

public function stripePost(Request $request,$totalPrice)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    
        Stripe\Charge::create ([
                "amount" => $totalPrice * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Thanks for payment." 
        ]);
        
        $user=Auth::user();
        $userid = $user->id;
        $data=cart::where('user_id','=',$userid)->get();

        foreach($data as$data){

            $order=new order;
            $order->name=$data->name;
            $order->email=$data->email;
            $order->phone=$data->phone;
            $order->address=$data->address;
            $order->user_id=$data->user_id;

            $order->product_title=$data->product_title;
            $order->price=$data->price;
            $order->quantity=$data->quantity;
            $order->image=$data->image;
            $order->product_id=$data->product_id;

            $order->payment_status='paid';
            $order->delivery_status=' processing ';

            $order->save();

           

            $cart_id = $data->id;
              $cart = Cart::find($cart_id);
             $cart->delete();


        }

        Session::flash('success', 'Payment successful!');
              
        return back();
    }


    public function product_search(Request $request){
        $search_text=$request->search;
        $product=product::where('title','LIKE',"%$search_text%")->orWhere('category','LIKE',"%$search_text%");
        return view('home.userpage',compact('product'));

    }

}