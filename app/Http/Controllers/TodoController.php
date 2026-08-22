<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
public function index(Request $request)
{

    // $categories = Category::all();
    $todos = Todo::query();

    if ($request->status == '1') {
        $todos->where('status', true);
    }

    if ($request->status == '0') {
        $todos->where('status', false);
    }

    $todos = $todos->paginate(2)->withQueryString();

    return view('todos.index', compact('todos'));
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
            'category_id' => 'required|exists:categories,id',
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

    public function show(Todo $todo){
        return view('todos.show', compact('todo'));
    }

    public function edit(Todo $todo){
        $categories = Category::all();

        return view('todos.edit', compact('todo', 'categories'));
    }

    public function update(Request $request, Todo $todo){
        $validated = $request->validate([
            'image' => 'nullable|max:2000|image',
            'title' => 'required|min:5',
            'description' => 'required|min:5',
            'category_id' => 'required|exists:categories,id',
            'status' => 'required|boolean',
        ]);

        if ($request->hasFile('image')) {
            $filename = time() . '_' . $request->image->getClientOriginalName();
            $request->image->storeAs('/images', $filename);
            $validated['image'] = $filename;
        }

        $todo->update($validated);

        return redirect()->route('todo.show', $todo);
    }

    public function complete(Todo $todo){
        $todo->update(['status' => 1]);

        return redirect()->route('todo.index');
    }

    public function destroy(Todo $todo){
        $todo -> delete();

        return redirect()-> route('todo.index');
    }

}
