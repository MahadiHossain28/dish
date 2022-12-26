<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\foodlist;
use App\Models\orderlist;
use App\Models\customerlist;

use App\Models\profitcalculation;
use App\Models\sub_orderlist;
use App\Models\User;
use App\Models\wasted_foods;

use Illuminate\Http\Request;
use Illuminate\Suppor\Facades\DB;
use File;
use Carbon\Carbon;




class AdminController extends Controller
{
    public function home()
    {
        return view('backend.admin');
    }

    public function master()
    {

        return view('backend.master');
    }
    public function dashboard()
    {
        $test = profitcalculation::sum('profit');
        $orderlist = orderlist::count();
        $customerlist = User::count();
        $invoice = orderlist::count();
        $profit= profitcalculation::select('id', 'created_at')->get();

        return view('backend.dashboard', compact('orderlist', 'test', 'customerlist', 'invoice'));
    }
    public function admin_profile()
    {
        $users = User::all();

        return view('backend.admin_profile', compact('users'));
    }
    public function customerlist()
    {
        $customerlists = User::all();

        return view('backend.customerlist', compact('customerlists'));
    }
    public function invoice($id)
    {
        $order = orderlist::find($id);
        $suborders = sub_orderlist::where('order_id', $id)->get();

        return view('backend.invoice', compact('suborders', 'order'));
    }

    //foodlist
    // public function foodlist($food_id)
    // {
    //     $food = foodlist::where('id', $food_id)->get();
    //     //dd($food);
    //     return view('backend.foodlist', compact('food'));
    // }
    //foodlist

    public function foodlist()
    {

        $foods = foodlist::all();
        $category = category::all();

        return view('backend.foodlist', compact('foods', 'category'));
    }

    public function edit_foodlist($food_id)
    {
        $food = foodlist::find($food_id);
        $category = category::all();
        return view('backend.edit_foodlist', compact('food', 'category'));
    }
    // public function add_foodlist()
    // {
    //     //$add_foodlist->foodlist::all();

    //     return view('backend.add_foodlist', compact('foodlist'));
    // }

    public function store_foodlist(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => ['required'],
            'price' => ['required'],
        ]);

        $filename = '';

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            if ($file->isValid()) {
                $filename = date('ymdhms') . '.' . $file->getClientOriginalExtension();
                $file->storeAs('ImageFood/', $filename);
            }
        }

        foodlist::create([

            'name' => $request->name,
            'price' => $request->price,
            'category_id' => $request->category,
            'image' => $filename,
        ]);
        return redirect()->back()->with('status', 'Food has been added to the list');
    }

    public function update_foodlist(Request $request)
    {

        $request->validate([
            'name' => ['required'],
            'price' => ['required'],
            'category' => ['required'],
            'image' => ['image', 'mimes:jpeg,png,jpg'],
        ]);
        $food = foodlist::find($request->foodlist_id);
        $filename = $food->image;
        if ($request->hasFile('image')) {
            $destination = 'uploads/ImageFood/' . $food->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            if ($file->isValid()) {
                $filename = date('Ymdhms') . '.' . $file->getClientOriginalExtension();
                $file->storeAs('ImageFood', $filename);
            }
        }
        // $filename = '';

        // if ($request->hasFile('image')) {
        //     $file = $request->file('image');
        //     if ($file->isValid()) {
        //         $filename = date('ymdhms') . '.' . $file->getClientOriginalExtension();
        //         $file->storeAs('ImageFood/', $filename);
        //     }
        // }

        // $foodlist->image = $filename;

        // $file->storeAs('foodlist', $filename);


        foodlist::find($request->foodlist_id)->update([

            'name' => $request->name,
            'price' => $request->price,
            'category' => $request->category,
            'image' => $filename,
        ]);
        return redirect()->route('foodlist')->with('status', 'Food has been updated to the list');
    }
    public function delete_foodlist($food_id)
    {
        $food = foodlist::find($food_id)->delete();
        return redirect()->back()->with('status', 'Food has been updated to the list');
    }
    public function orderlist(Request $request)
    {
        if ($request->begin != null && $request->end != null) {
            $orderlists = orderlist::where('date', '>=', $request->begin)->where('date', '<=', $request->end)->get();
        } else {
            $orderlists = orderlist::paginate(10);
        }
        return view('backend.orderlist', compact('orderlists'));
    }
    public function delete_order(Request $request)
    {
        $order = orderlist::find($request->id);
        $order->delete();


        return redirect()->back()->with('status', 'Order has been deleted');
    }
    public function suborderlist()
    {
        $suborderlists = sub_orderlist::all();
        $orderlists = orderlist::all();

        return view('backend.suborderlist', compact('suborderlists', 'orderlists'));
    }


    //Wasted Fooditems
    public function add_wastedfooditems()
    {
        $wastedfooditems = wasted_foods::all();
        return view('backend.add_wastedfooditems', compact('wastedfooditems'));
    }
    public function wasted_fooditems()
    {
        $wastedfooditem = wasted_foods::all();
        return view('backend.wasted_fooditems', compact('wastedfooditem'));
    }
    public function edit_wastedfooditems($id)
    {
        $wastedfood = wasted_foods::find($id);
        return view('backend.edit_wastedfooditems', compact('wastedfood'));
    }
    public function store_wastedfoods(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => ['required'],
            'amount' => ['required'],
            'duration' => ['required'],
            'image' => ['required'],
        ]);

        $filename = '';

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            if ($file->isValid()) {
                $filename = date('ymdhms') . '.' . $file->getClientOriginalExtension();
                $file->storeAs('WastedFoodImage/', $filename);
            }
        }


        wasted_foods::create([

            'name' => $request->name,
            'amount' => $request->amount,
            'duration' => $request->duration,
            'image' => $filename,
        ]);
        return redirect()->back()->with('status', 'Wasted Food has been added to the list');
    }
    // public function store_wastedfooditems(Request $request)
    // {
    //     // dd($request->all());
    //     $request->validate([
    //         'name' => ['required'],
    //         'amount' => ['required'],
    //         'duration' => ['required'],
    //         'image' => ['required'],
    //     ]);

    //     $filename = '';

    //     if ($request->hasFile('image')) {
    //         $file = $request->file('image');
    //         if ($file->isValid()) {
    //             $filename = date('ymdhms') . '.' . $file->getClientOriginalExtension();
    //             $file->storeAs('WastedFoodIMAGE/', $filename);
    //         }
    //     }


    //     foodlist::create([

    //         'name' => $request->name,
    //         'amount' => $request->amount,
    //         'duration' => $request->duration,
    //         'image' => $filename,
    //     ]);
    //     return redirect()->back()->with('message', 'Wasted Food Items has been added to the list');
    // }
    public function update_wastedfooditems(Request $request)
    {

        $request->validate([
            'name' => ['required'],
            'amount' => ['required'],
            'duration' => ['required'],
            'image' => ['required'],
        ]);

        $filename = '';

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            if ($file->isValid()) {
                $filename = date('ymdhms') . '.' . $file->getClientOriginalExtension();
                $file->storeAs('WastedFoodImage/', $filename);
            }
        }


        //foodlist_id ?

        wasted_foods::find($request->wasted_fooditems_id)->update([

            'name' => $request->name,
            'amount' => $request->amount,
            'duration' => $request->duration,
            'image' => $filename,
        ]);
        return redirect()->route('add_wastedfooditems')->with('message', 'Food has been updated to the list');
    }
    public function delete_wastedfooditems($id)
    {
        $wastedfoods = wasted_foods::find($id)->delete();

        return redirect()->back()->with('message', 'Food has been updated to the list');
    }

    public function profit_calculation($id)
    {
        $orderlist = orderlist::find($id);
        // profitcalculation::create([
        //     'order_id' =>$request->order_id,
        //     'expenditure' => $request->expenditure,
        //     'total' => $request->total,
        //     'profit' =>$request->profit,


        // ]);

        // return redirect()->route('index')->with('message', 'Registration successful');
        // $profitcalculations = profitcalculation::all();
        // $suborderlists = sub_orderlist::all();
        // $orderlists = orderlist::all();

        //return view('backend.profitcalculation', compact('profitcalculations', 'suborderlists', 'orderlists'));
        return view('backend.profitcalculation', compact('orderlist'));
    }

    public function add_profitcalculation(Request $request)
    {
        $profit = $request->payed - $request->expense;
        profitcalculation::where('order_id', $request->order_id)->update([
            'order_id' => $request->order_id,
            'expenditure' => $request->expense,
            'total' => $request->payed,
            'profit' => $profit,
        ]);
        return redirect()->route('orderlist');
    }
    public function category()
    {
        $category = category::all();

        return view('backend.category', compact('category'));
    }
    public function postcategory(Request $request)
    {

        $request->validate([
            'name' => ['required'],


        ]);
        category::create([

            'name' => $request->name,


        ]);
        return redirect()->back()->with('status', 'Category has been added to the list');
    }
}
