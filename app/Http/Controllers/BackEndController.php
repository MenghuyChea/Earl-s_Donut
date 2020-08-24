<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Donut;
use App\FeedBack;
class BackEndController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //Drink Only
    public function index_drink()
    {
        $drinks = DB::table('donuts')->where('type', 'like', '%Drink')->get();
        return view('BackEnd.Drink.index', ['drinks' => $drinks]);
    }
    public function create_drink()
    {
        return view('BackEnd.Drink.create_drink');
    }
    public function add_drink(Request $request)
    {
        $this->validate($request, [
            'item_name' => 'required',
            'type' => 'required',
            'price' => 'required',
            'description'=>'required',
            'image'=>'nullable'
        ]);
        $drink = new Donut;
        $drink->item_name = $request->input('item_name');
        $drink->type = $request->input('type');
        $drink->price = $request->input('price');
        $drink->description = $request->input('description');
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/items/',$filename);
            $drink->image=$filename;
        }else{
            return $request;
            $drink->image='';
        }
        $drink->save();
        return redirect('/Drink')->with('info1', 'Drink saved Successfully!');
    }

    public function read_drink($id)
    {
        $drink = Donut::find($id);
        return view('BackEnd.Drink.read_drink', ['drink' => $drink]);
    }
    public function update_drink($id)
    {
        $drink = Donut::find($id);
        return view('BackEnd.Drink.update_drink', ['drink' => $drink]);
    }

    public function edit_drink(Request $request, $id)
    {
        $this->validate($request, [
            'item_name' => 'required',
            'type' => 'required',
            'price' => 'required',
            'description'=>'required'
        ]);
        $data = array(
            'item_name' => $request->input('item_name'),
            'type' => $request->input('type'),
            'price' => $request->input('price'),
            'description'=> $request->input('description'),
        );
        Donut::where('id', $id)->update($data);
        return redirect('/Drink')->with('info1', 'Drink updated Successfully!');
    }
    public function delete_drink($id)
    {
        Donut::where('id', $id)->delete();
        return redirect('/Drink')->with('info1', 'Drink deleted Successfully!');
    }

    //Donut Only
    public function index_donut()
    {
        $donuts = DB::table('donuts')->where('type', 'like', '%Donuts')->get();
        return view('BackEnd.Donut.index', ['donuts' => $donuts]);
    }
    public function create_donut()
    {
        return view('BackEnd.Donut.create_donut');
    }
    public function add_donut(Request $request)
    {
        $this->validate($request, [
            'item_name' => 'required',
            'type' => 'required',
            'price' => 'required',
            'description'=>'required',
            'image'=>'nullable'
        ]);
        $donut = new Donut;
        $donut->item_name = $request->input('item_name');
        $donut->type = $request->input('type');
        $donut->price = $request->input('price');
        $donut->description = $request->input('description');
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/items/',$filename);
            $donut->image=$filename;
        }else{
            return $request;
            $donut->image='';
        }
        $donut->save();
        return redirect('/Donut')->with('info1', 'Donut saved Successfully!');
    }

    public function read_donut($id)
    {
        $donut = Donut::find($id);
        return view('BackEnd.Donut.read_donut', ['donut' => $donut]);
    }
    public function update_donut($id)
    {
        $donut = Donut::find($id);
        return view('BackEnd.Donut.update_donut', ['donut' => $donut]);
    }

    public function edit_donut(Request $request, $id)
    {
        $this->validate($request, [
            'item_name' => 'required',
            'type' => 'required',
            'price' => 'required',
            'description'=>'required'
        ]);
        $data = array(
            'item_name' => $request->input('item_name'),
            'type' => $request->input('type'),
            'price' => $request->input('price'),
            'description'=> $request->input('description'),
        );
        Donut::where('id', $id)->update($data);
        return redirect('/Donut')->with('info1', 'Donut updated Successfully!');
    }
    public function delete_donut($id)
    {
        Donut::where('id', $id)->delete();
        return redirect('/Donut')->with('info1', 'Donut deleted Successfully!');
    }

    //Fancy Donut Only
    public function index_fancy_donut()
    {
        $fancy_donuts = DB::table('donuts')->where('type', 'like', '%Fancy Donuts')->get();
        return view('BackEnd.FancyDonut.index', ['fancy_donuts' => $fancy_donuts]);
    }
    public function create_fancy_donut()
    {
        return view('BackEnd.FancyDonut.create_fancydonut');
    }
    public function add_fancy_donut(Request $request)
    {
        $this->validate($request, [
            'item_name' => 'required',
            'type' => 'required',
            'price' => 'required',
            'description'=>'required',
            'image'=>'nullable'
        ]);
        $fancy_donut = new Donut;
        $fancy_donut->item_name = $request->input('item_name');
        $fancy_donut->type = $request->input('type');
        $fancy_donut->price = $request->input('price');
        $fancy_donut->description = $request->input('description');
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/items/',$filename);
            $fancy_donut->image=$filename;
        }else{
            return $request;
            $fancy_donut->image='';
        }
        $fancy_donut->save();
        return redirect('/FancyDonut')->with('info1', 'Donut saved Successfully!');
    }

    public function read_fancy_donut($id)
    {
        $fancy_donut = Donut::find($id);
        return view('BackEnd.FancyDonut.read_fancydonut', ['fancy_donut' => $fancy_donut]);
    }
    public function update_fancy_donut($id)
    {
        $fancy_donut = Donut::find($id);
        return view('BackEnd.FancyDonut.update_fancydonut', ['fancy_donut' => $fancy_donut]);
    }

    public function edit_fancy_donut(Request $request, $id)
    {
        $this->validate($request, [
            'item_name' => 'required',
            'type' => 'required',
            'price' => 'required',
            'description'=>'required'
        ]);
        $data = array(
            'item_name' => $request->input('item_name'),
            'type' => $request->input('type'),
            'price' => $request->input('price'),
            'description'=> $request->input('description'),
        );
        Donut::where('id', $id)->update($data);
        return redirect('/FancyDonut')->with('info1', 'Donut updated Successfully!');
    }
    public function delete_fancy_donut($id)
    {
        Donut::where('id', $id)->delete();
        return redirect('/FancyDonut')->with('info1', 'Donut deleted Successfully!');
    }

    //SandWich Only
    public function index_sandwich()
    {
        $sandwiches = DB::table('donuts')->where('type', 'like', '%Sandwich')->get();
        return view('BackEnd.SandWich.index', ['sandwiches' => $sandwiches]);
    }
    public function create_sandwich()
    {
        return view('BackEnd.SandWich.create_sandwich');
    }
    public function add_sandwich(Request $request)
    {
        $this->validate($request, [
            'item_name' => 'required',
            'type' => 'required',
            'price' => 'required',
            'description'=>'required',
            'image'=>'nullable'
        ]);
        $sandwich = new Donut;
        $sandwich->item_name = $request->input('item_name');
        $sandwich->type = $request->input('type');
        $sandwich->price = $request->input('price');
        $sandwich->description = $request->input('description');
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/items/',$filename);
            $sandwich->image=$filename;
        }else{
            return $request;
            $sandwich->image='';
        }
        $sandwich->save();
        return redirect('/SandWich')->with('info1', 'SandWich saved Successfully!');
    }

    public function read_sandwich($id)
    {
        $sandwich = Donut::find($id);
        return view('BackEnd.SandWich.read_sandwich', ['sandwich' => $sandwich]);
    }
    public function update_sandwich($id)
    {
        $sandwich = Donut::find($id);
        return view('BackEnd.SandWich.update_sandwich', ['sandwich' => $sandwich]);
    }

    public function edit_sandwich(Request $request, $id)
    {
        $this->validate($request, [
            'item_name' => 'required',
            'type' => 'required',
            'price' => 'required',
            'description'=>'required'
        ]);
        $data = array(
            'item_name' => $request->input('item_name'),
            'type' => $request->input('type'),
            'price' => $request->input('price'),
            'description'=> $request->input('description'),
        );
        Donut::where('id', $id)->update($data);
        return redirect('/SandWich')->with('info1', 'SandWich updated Successfully!');
    }
    public function delete_sandwich($id)
    {
        Donut::where('id', $id)->delete();
        return redirect('/SandWich')->with('info1', 'SandWich deleted Successfully!');
    }

    //Croissant Only
    public function index_croissant()
    {
        $croissants = DB::table('donuts')->where('type', 'like', '%Croissant')->get();
        return view('BackEnd.Croissant.index', ['croissants' => $croissants]);
    }
    public function create_croissant()
    {
        return view('BackEnd.Croissant.create_croissant');
    }
    public function add_croissant(Request $request)
    {
        $this->validate($request, [
            'item_name' => 'required',
            'type' => 'required',
            'price' => 'required',
            'description'=>'required',
            'image'=>'nullable'
        ]);
        $croissant = new Donut;
        $croissant->item_name = $request->input('item_name');
        $croissant->type = $request->input('type');
        $croissant->price = $request->input('price');
        $croissant->description = $request->input('description');
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/items/',$filename);
            $croissant->image=$filename;
        }else{
            return $request;
            $croissant->image='';
        }
        $croissant->save();
        return redirect('/Croissant')->with('info1', 'Croissant saved Successfully!');
    }

    public function read_croissant($id)
    {
        $croissant = Donut::find($id);
        return view('BackEnd.Croissant.read_croissant', ['croissant' => $croissant]);
    }
    public function update_croissant($id)
    {
        $croissant = Donut::find($id);
        return view('BackEnd.Croissant.update_croissant', ['croissant' => $croissant]);
    }

    public function edit_croissant(Request $request, $id)
    {
        $this->validate($request, [
            'item_name' => 'required',
            'type' => 'required',
            'price' => 'required',
            'description'=>'required'
        ]);
        $data = array(
            'item_name' => $request->input('item_name'),
            'type' => $request->input('type'),
            'price' => $request->input('price'),
            'description'=> $request->input('description'),
        );
        Donut::where('id', $id)->update($data);
        return redirect('/Croissant')->with('info1', 'Croissant updated Successfully!');
    }
    public function delete_croissant($id)
    {
        Donut::where('id', $id)->delete();
        return redirect('/Croissant')->with('info1', 'Croissant deleted Successfully!');
    }

    //Pastries Only
    public function index_pastries()
    {
        $pastries = DB::table('donuts')->where('type', 'like', '%Pastries')->get();
        return view('BackEnd.Pastries.index', ['pastries' => $pastries]);
    }
    public function create_pastries()
    {
        return view('BackEnd.Pastries.create_pastries');
    }
    public function add_pastries(Request $request)
    {
        $this->validate($request, [
            'item_name' => 'required',
            'type' => 'required',
            'price' => 'required',
            'description'=>'required',
            'image'=>'nullable'
        ]);
        $pastrie = new Donut;
        $pastrie->item_name = $request->input('item_name');
        $pastrie->type = $request->input('type');
        $pastrie->price = $request->input('price');
        $pastrie->description = $request->input('description');
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/items/',$filename);
            $pastrie->image=$filename;
        }else{
            return $request;
            $pastrie->image='';
        }
        $pastrie->save();
        return redirect('/Pastries')->with('info1', 'Pastries saved Successfully!');
    }

    public function read_pastries($id)
    {
        $pastrie = Donut::find($id);
        return view('BackEnd.Pastries.read_pastries', ['pastrie' => $pastrie]);
    }
    public function update_pastries($id)
    {
        $pastrie = Donut::find($id);
        return view('BackEnd.Pastries.update_pastries', ['pastrie' => $pastrie]);
    }

    public function edit_pastries(Request $request, $id)
    {
        $this->validate($request, [
            'item_name' => 'required',
            'type' => 'required',
            'price' => 'required',
            'description'=>'required'
        ]);
        $data = array(
            'item_name' => $request->input('item_name'),
            'type' => $request->input('type'),
            'price' => $request->input('price'),
            'description'=> $request->input('description'),
        );
        Donut::where('id', $id)->update($data);
        return redirect('/Pastries')->with('info1', 'Pastries updated Successfully!');
    }
    public function delete_pastries($id)
    {
        Donut::where('id', $id)->delete();
        return redirect('/Pastries')->with('info1', 'Pastries deleted Successfully!');
    }

    //FeedBack Only
    public function index_feed()
    {
        $feeds= FeedBack::all();
        return view('BackEnd.FeedBack.index', ['feeds' => $feeds]);
    }
    public function create_feed()
    {
        return view('BackEnd.FeedBack.create_feed');
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
        return redirect('/FeedBack')->with('info1', 'FeedBack saved Successfully!');
    }

    public function read_feed($id)
    {
        $feed = FeedBack::find($id);
        return view('BackEnd.FeedBack.read_feed', ['feed' => $feed]);
    }
    public function update_feed($id)
    {
        $feed = FeedBack::find($id);
        return view('BackEnd.FeedBack.update_feed', ['feed' => $feed]);
    }

    public function edit_feed(Request $request, $id)
    {
        $this->validate($request, [
            'feedback_name' => 'required',
            'feedback_email' => 'required',
            'description' => 'required'
        ]);
        $data = array(
            'feedback_name' => $request->input('feedback_name'),
            'feedback_email' => $request->input('feedback_email'),
            'description'=> $request->input('description'),
        );
        FeedBack::where('id', $id)->update($data);
        return redirect('/FeedBack')->with('info1', 'FeedBack updated Successfully!');
    }
    public function delete_feed($id)
    {
        FeedBack::where('id', $id)->delete();
        return redirect('/FeedBack')->with('info1', 'FeedBack deleted Successfully!');
    }

    public function show_order(){
        $orders= Order::all();
        return view('BackEnd.Order.index', ['orders' => $orders]);
    }
    public function read_order($id){
        $order = Order::find($id);
        $orders =unserialize($order->cart);
        return view('BackEnd.Order.read_order',['order' => $order , 'orders' => $orders->items,'totalPrice' => $orders->totalPrice]);
    }

}
