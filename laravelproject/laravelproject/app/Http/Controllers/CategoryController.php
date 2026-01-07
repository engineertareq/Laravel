<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('backend.category.index', compact('categories'));
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
        // 1. Validation
        $request->validate(
            [
                // Removed spaces inside the rule string for safety
                'cat_name' => 'required|max:255|min:3|unique:categories,name' 
            ],
            [
                'required' => 'Category name is required',
                'max' => 'Category name is too long',
                'min' => 'Minimum 3 characters are required'
            ]
        );

        // 2. Prepare Data
        $category = [
            'name' => $request->cat_name
        ];

        // 3. Insert
        Category::create($category);

        // 4. Redirect (Best practice: use route names instead of hardcoded paths)
        return redirect()->route('categories.index')->with('success', 'Category Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        // Not usually needed for simple categories
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        // FIX: You must pass the category data to the view so the form can be filled
        return view('backend.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        // FIX: Implemented Update Logic
        
        // 1. Validation
        $request->validate(
            [
                // Note: We add .$category->id to allow the name to stay the same for THIS category
                'cat_name' => 'required|min:3|max:255|unique:categories,name,' . $category->id 
            ]
        );

        // 2. Update
        $category->update([
            'name' => $request->cat_name
        ]);

        // 3. Redirect
        return redirect()->route('categories.index')->with('success', 'Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();

        // FIX: Redirect to index, NOT destroy. 
        // Redirecting to destroy would cause an infinite loop or method not found error.
        return redirect()->route('categories.index')->with('success', 'Successfully Deleted');
    }
}