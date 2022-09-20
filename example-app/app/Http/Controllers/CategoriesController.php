<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('backoffice.categories.categories-list', compact('categories'));
    }


    public function create()
    {
        return view('backoffice.categories.create');
    }


    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return view('backoffice.categories.result', $category);
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $category = Category::find($id);
        return view('backoffice.categories.edit', compact('category'));
    }


    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->input('name');
        $category->update();
        return redirect('/backoffice/categories');
    }


    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('/backoffice/categories');
    }
}
