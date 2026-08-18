<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index(){
        $categories = Category::all();

        return view('categories.index',  compact('categories'));
    }

    public function create(){
        return view('categories.create');
    }

    public function store(Request $request){
        // dump($request -> all());

        $request -> validate([
            'title' => 'required|min:5'
        ]);

        Category::create([
            'title' => $request->title
        ]);

        return redirect()->route('category.index');
    }

}
