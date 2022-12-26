<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\foodlist;
use App\Models\orderlist;
use App\Models\profitcalculation;
use App\Models\sub_orderlist;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Gloudemans\Shoppingcart\Facades\Cart;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.Home');
    }
    public function user_registration()
    {
        return view('frontend.Registration');
    }
    public function user_login()
    {
        return view('frontend.Login');
    }
    public function foodmenu(Request $request)
    {
        $category = category::all();

        //search by foodname
        if($request->search != null){
            $food = foodlist::Join('categories', 'foodlists.category_id', '=', 'categories.id')->where('foodlists.name', 'LIKE', $request->search . '%')->Orwhere('categories.name', 'LIKE', $request->search . '%')->get(['foodlists.*']);
        }else{
            $food = foodlist::all();
        }

        return view('frontend.foodmenu', compact('food', 'category'));
    }
    // public function search_categorywise(Request $request)
    // {
    //     if ($request->search) {

    //         dd(1);
    //         // $searchcat = category::where('name', 'LIKE', '%', $request->search, '%')->get();
    //         // return view('frontend.search_categorywise', compact('searchcat'));
    //     } else {
    //         dd(2);
    //         // $cats = category::all();
    //         // return redirect()->route('foodmenu')->with('message', 'Empty Search');
    //     }
    // }



    public function registration(Request $request)
    {
        $request->validate(
            [
                'name' => ['required'],
                'phone' => ['required'],
                'email' => ['required', 'unique:users'],
                'password' => ['required'],

            ]
        );
        User::create([

            'name' => $request->name,
            'phone' => $request->phone,

            'email' => $request->email,
            'password' => Hash::make($request->password),
            'address' => $request->address,
        ]);


        return redirect()->route('user_login')->with('message', 'Registration successful');
    }


    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (Auth::user()->role_id == 1) {
                return redirect()->route('dashboard')->with('message', ' Admin Login successful');
            } else if (Auth::user()->role_id == 2) {
                return redirect()->route('index')->with('message', 'Admin Successfully logged-in');
            } else {
                return redirect()->route('index')->with('message', 'Admin Successfully logged-in');
            }
            // return redirect()->route('index')->with('message', 'Admin Successfully logged-in');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    public function user_dashboard()
    {
        $users = Auth::user();
        $orders = orderlist::all();

        return view('frontend.user_dashboard', compact('users', 'orders',));
    }
    public function edit_dashboard(Request $request, $id)
    {

        $customer = User::find($id);
        $filename = '';
        //if($request->hasFile())
        User::find($id)->update([

            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'address' => $request->address,

            //'image' => $filename,
        ]);
        return redirect()->back()->with('status', 'Profile has been updated');
    }


    public function update_user($id)
    {
        // $cuntomer = Auth::user();
        $customer = User::find($id);
        return view('frontend.edit_user', compact('customer'));
    }
    public function cancel_order(Request $request)
    {
        $order = orderlist::find($request->id);
        $order->delete();


        return redirect()->back()->with('status', 'Order has been Cancelled');
    }
    public function delete_cartitem($id)
    {
        $cart = Cart::remove($id);
        return redirect()->route('foodmenu')->with('status', 'Food has been updated to the list');
    }

    //order

    public function cart()
    {

        $cart = Cart::content();
        return view('frontend.cart', compact('cart'));
    }
    public function addtocart($id)
    {
        $foods = foodlist::find($id);

        Cart::add([
            [
                'id' => $foods->id,
                'name' => $foods->name,
                'qty' => 20,
                'price' => $foods->price,
                'weight' => 1,
                'options' => ['image' => $foods->image]
            ]
        ]);
        return redirect()->back();
    }
    public function order(Request $request)
    {
        // dd($request->all());
        $cart = Cart::content();
        $sub_total = (float)str_replace(',', '', Cart::subtotal());
        $grand_total = $sub_total + ($sub_total * (7 / 100)) + 100;
        $discount_grand_total = $grand_total - ($grand_total * (10 / 100));
        $date = Carbon::now()->format('Y-m-d');
        $invoice = orderlist::latest('id')->first();
        if ($invoice == null) {
            $invoice_code = "INV-1";
        } else {
            $invoice_code = "INV-" . $invoice->id;
            $invoice_code++;
        }

        $order_user = orderlist::where('name', auth()->user()->name)->count();
        // dd($order_user);

        if ($order_user >= 2) {

            $order = orderlist::create([
                'invoice_id' => $invoice_code,
                'name' => $request->name,
                'phone' => $request->phone,
                'address' => $request->address,
                'event' => $request->event,
                'date' => $request->date,
                'time' => $request->time,
                'total' =>  $discount_grand_total,


            ]);

            profitcalculation::create([
                'order_id' => $order->id
            ]);

            foreach ($cart as $data) {

                $suborderlists = sub_orderlist::create([
                    'name' => $data->name,
                    'order_id' => $order->id,
                    'price' => $data->price,
                    'quantity' => $data->qty,
                    'sub_total' => $total = $data->price * $data->qty,

                ]);
            }
            Cart::destroy();
            return redirect()->route('foodmenu');
        } else {

            $order = orderlist::create([
                'invoice_id' => $invoice_code,
                'name' => $request->name,
                'phone' => $request->phone,
                'address' => $request->address,
                'event' => $request->event,
                'date' => $request->date,
                'time' => $request->time,
                'total' =>  $grand_total,


            ]);

            profitcalculation::create([
                'order_id' => $order->id
            ]);

            foreach ($cart as $data) {

                $suborderlists = sub_orderlist::create([
                    'name' => $data->name,
                    'order_id' => $order->id,
                    'price' => $data->price,
                    'quantity' => $data->qty,
                    'sub_total' => $total = $data->price * $data->qty,

                ]);
            }
            Cart::destroy();
            return redirect()->route('foodmenu');
        }
    }
    public function customer_invoice($id)
    {
        $order = orderlist::find($id);
        $suborders = sub_orderlist::where('order_id', $id)->get();

        return view('frontend.customer_invoice', compact('suborders', 'order'));
    }
    public function platteritems($id)
    {

        // $suborderlists = sub_orderlist::all();


        // return view('backend.suborderlist', compact('suborderlists'));
        $suborderlists = sub_orderlist::where('order_id', $id)->get();
        // dd($suborderlists);
        //$order = orderlist::all()->get();

        return view('frontend.platteritems', compact('suborderlists'));
    }
    public function cart_increment(Request $request)
    {
        Cart::update($request->rowid, $request->quantity);
        return back();
    }
    public function restorecart($id)
    {
        $suborderlists = sub_orderlist::where('order_id', $id)->get();
        $order = orderlist::where('id', $id)->first();
        // dd($order);
        return view('frontend.restorecart', compact('suborderlists', 'order'));
    }
    public function updatequantity(Request $request)
    {
        $suborder = sub_orderlist::find($request->id);
        $order = orderlist::find($suborder->order_id);
        $new_price = $order->total - $suborder->sub_total;
        $sub_total = $request->quantity * $suborder->price;
        $tax = ($sub_total * 7) / 100;
        $total = $new_price + $sub_total + $tax + 100;

        // dd($request->all(), $new_price, $sub_total, $tax, $total, $suborder, $order);
        $suborder->update([
            'quantity' => $request->quantity,
            'sub_total' => $sub_total
        ]);
        $order->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'date' => $request->date,
            'time' => $request->time,
            'total' => $total
        ]);

        return redirect()->route('user_dashboard');
    }
}
