<?php

namespace App\Http\Controllers;

use App\Models\MCart;
use Illuminate\Http\Request;
use App\Models\MCategory;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = MCategory::all();
        return view('backend.category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'CategoryName' => 'required|string|max:200',
        ]);
        MCategory::create($data);  // save category
        return redirect()->route('get-category')->with('success', 'Category added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $categoryModel = MCategory::findOrFail($id);
        
        return view('backend.category.edit', compact('categoryModel','id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'CategoryName' => 'required|unique:table',
        ]);

        $category = MCategory::findOrFail($id);
        $category->update($data);
    
        return redirect()->route('get-category')->with('success', "Category updated successfully!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        MCategory::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Category deleted successfully!');
    }
}
 