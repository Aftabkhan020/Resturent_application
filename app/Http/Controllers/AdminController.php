<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
use App\Models\EditChef;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    public function users(){
        $data = user::all();
        return view("Admin.users",compact("data"));
    }

    public function deleteuser($id){
        $data = user::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function foodmenu(){
        $food1 =  food::all();
        return view("Admin.foodmenu",compact("food1"));
        //return view("Admin.foodmenu");
    }

    public function uploadfood(Request $request)
    {
        // $validated = $request->validate([
        // 'title' => 'required|unique:posts|max:255',
        // 'price'=>'required|unique:posts|max:255',
        // 'description'=>'required|unique:posts|max:255'
        // ]);

        $data = new food;
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimage',$imagename);
        $data->image=$imagename;
        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->save();
        return redirect()->back();
    // The blog post is valid...
    }
    public function editChefs(){
        $data = DB::table('edit_chefs')->get();
        return view("Admin.chefs",compact("data"));
    }

    public function uploadChef(Request $request)
    {

        $data = new EditChef;
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('Chefimage',$imagename);
        $data->image=$imagename;
        $data->Name=$request->Name;
        $data->Roll=$request->Roll;
        $data->save();
        return redirect()->back();
    // The blog post is valid...
    }
    public function deletefood($id){
        $data = food::find($id);
        $data->delete();
        return redirect()->back();
    }

}
