<?php

namespace App\Http\Controllers;

use App\Models\CarCategory;
use Illuminate\Http\Request;

class CarCategoryController extends Controller
{
    public function index(){
       $categoreis = CarCategory::all();
       return view('admin.categories.index',[
        'categories' => $categoreis
       ]);
    }

    public function store(Request $request){
        $categorie = new CarCategory();
        $categorie->name = $request->name;
        $categorie->description = $request->description;
        $categorie->save();
        return redirect()->back();
    }
}
