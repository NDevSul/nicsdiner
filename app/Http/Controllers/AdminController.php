<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
use App\Models\FoodGallery;
use App\Models\order;


class AdminController extends Controller
{
    public function user()
    {
        $data = user::all();
        return view("admin.users", compact("data"));
    }


    public function deleteuser($id)
    {
        $data = user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function deletemenu($id)
    {
        $data = food::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updatemenu($id)
    {
        $data = food::find($id);
        return view("admin.updatemenu", compact("data"));
    }

    public function update(Request $request, $id)
    {
        $data = food::find($id);
        $image = $request->image;

        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('foodimage', $imagename);

        $data->image = $imagename;

        $data->title = $request->title;
        $data->price = $request->price;
        $data->category = $request->category;
        $data->description = $request->description;

        $data->save();
        return redirect('foodmenu');
    }

    public function foodmenu()
    {

        $data = food::all();
        return view("admin.foodmenu", compact('data'));
    }

    public function upload(Request $request)
    {
        $fooddata = new food;
        $image = $request->image;

        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('foodimage', $imagename);

        $fooddata->image = $imagename;

        $fooddata->title = $request->title;
        $fooddata->price = $request->price;
        $fooddata->category = $request->category;
        $fooddata->description = $request->description;

        $fooddata->save();
        return redirect()->back();
    }

    public function viewgallery()
    {

        $data = FoodGallery::all();
        return view("admin.admingallery", compact("data"));
    }

    
    public function uploadgallery(Request $request)
    {

        $data = new FoodGallery;

        $image = $request->image;

        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('galleryimage', $imagename);

        $data->image = $imagename;

        $data->name = $request->name;

        $data->save();
        return redirect()->back();
    }

    public function updategallery($id)
    {
        $data = FoodGallery::find($id);
        return view("admin.updategallery", compact("data"));
    }

    public function updatefoodgallery(Request $request, $id)
    {
        $data = FoodGallery::find($id);
        $image = $request->image;

        if($image){

        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('galleryimage', $imagename);

        $data->image = $imagename;

        $data->name= $request->name;
        $data->save();
        return redirect()->back();
        }
    }

    public function deletegallery($id)
    {
        $data = FoodGallery::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function orders(){

        $data=order::all();
        return view('admin.orders', compact('data'));
    }

    public function search(Request $request){

        $search=$request->search;
        $data=order::where('name','Like','%' .$search. '%')->orWhere('foodname','Like','%' .$search. '%')->get();
        return view('admin.orders', compact('data'));
    }
    public function deleteorder($id)
    {
        $data = order::find($id);
        $data->delete();
        return redirect()->back();
    }
}
