<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(){
        return view('todos.index');
    }

    public function create(){

        $categories = Category::all();

        return view('todos.create', compact('categories'));
    }

    public function store(Request $request){
        $request -> validate([
            'image' => 'required|max:2000|image',
            'title' => 'required|min:5',
            'description' => 'required|min:5',
            'category_id' => 'required|integer'
        ]);

        $filename = time() . '_' . $request -> image -> getClientOriginalName();
        $request->image->storeAs('/images', $filename);
        
        Todo::create([

        'image' => $filename,
        'title' => $request->title,
        'description' => $request->description,
        'category_id' => $request->category_id
        
    ]);

    return redirect()->route('todo.index');

    }

}
