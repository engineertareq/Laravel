<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; // Required for deleting old images

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        // Passing 'products' to match the variable name
        return view('backend.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // 1. Assign the result to a variable ($categories)
        $categories = Category::all(); 
        
        // 2. Pass 'categories' (not 'data') to the view
        return view('backend.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 1. Validation
        $request->validate(
            [
                'name'          => 'required|max:255|min:3',
                'sku'           => 'required|unique:products,sku',
                'stock'         => 'required|integer',
                'price'         => 'required|numeric',
                'categories_id' => 'required|integer',
                'image'         => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ],
            [
                'name.required' => 'Product name is required',
                'sku.unique'    => 'This SKU already exists',
            ]
        );

        $input = $request->all();

     
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);

            $input['image'] = $imageName;
        }

        Product::create($input);

        return redirect()->route('products.index')->with('success', 'Product Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        // Not usually needed for this setup
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        // Pass the product data to the view
        return view('backend.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        // 1. Validation
        $request->validate(
            [
                'name'          => 'required|max:255|min:3',
                'sku'           => 'required|unique:products,sku,' . $product->id,
                'stock'         => 'required|integer',
                'price'         => 'required|numeric',
                'categories_id' => 'required|integer',
                'image'         => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]
        );

        // 2. Prepare Data
        $input = $request->all();

        // 3. Handle Image Upload (If a new image is selected)
        if ($request->hasFile('image')) {
            // A. Upload new image
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $input['image'] = $imageName;

            // B. Optional: Delete old image to save server space
            if ($product->image && File::exists(public_path('images/' . $product->image))) {
                File::delete(public_path('images/' . $product->image));
            }
        } else {
            // If no new image, remove 'image' from input so it doesn't set database to null
            unset($input['image']);
        }

        // 4. Update
        $product->update($input);

        // 5. Redirect
        return redirect()->route('products.index')->with('success', 'Product Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if ($product->image && File::exists(public_path('images/' . $product->image))) {
            File::delete(public_path('images/' . $product->image));
        }

        $product->delete();

        return redirect()->route('products.index')->with('success', 'Successfully Deleted');
    }
}