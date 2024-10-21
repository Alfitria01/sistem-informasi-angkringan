<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    // Display a listing of the resource
    public function index()
    {
        // Fetch all products with pagination
        $products = Product::paginate(5); // Adjust the number as needed
        return view('products.index', compact('products'));
    }

    // Show the form for creating a new resource
    public function create()
    {
        // Return view for creating a new product
        return view('products.create');
    }

    // Store a newly created resource in storage
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'image'         => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'title'         => 'required|string|max:255',
            'description'   => 'nullable|string',
            'price'         => 'required|numeric',
            'stock'         => 'required|integer'
        ]);

        // Store the image
        $image = $request->file('image');
        $imageName = $image->hashName();
        $image->storeAs('products', $imageName, 'public');

        // Create a new product with validated data
        $product = Product::create([
            'image'         => $imageName,
            'title'         => $request->title,
            'description'   => $request->description,
            'price'         => $request->price,
            'stock'         => $request->stock
        ]);

        // Redirect to the products index page with a success message
        return redirect()->route('products.index')
                         ->with('success', 'Product added successfully!');
    }

    // Display the specified resource
    public function show(Product $product)
    {
        // Return the view to display the product details
        return view('products.show', compact('product'));
    }

    // Show the form for editing the specified resource
    public function edit(Product $product)
    {
        // Return view for editing the product
        return view('products.edit', compact('product'));
    }

    // Update the specified resource in storage
    public function update(Request $request, Product $product)
    {
        // Validate the request
        $validatedData = $request->validate([
            'image' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
            'title' => 'required|min:3',
            'description' => 'nullable|min:5',
            'price' => 'required|numeric',
            'stock' => 'required|numeric'
        ]);

        // If an image is provided, handle the upload
        if ($request->hasFile('image')) {
            // Store the image
            $image = $request->file('image');
            $imageName = $image->hashName();
            $image->storeAs('products', $imageName, 'public');
            $validatedData['image'] = $imageName; // Update validated data with image name
        }

        // Update the product
        $product->update($validatedData);

        return redirect()->route('products.index')
                         ->with('success', 'Product updated successfully!');
    }

    // Remove the specified resource from storage
    public function destroy(Product $product)
    {
        // Delete the product
        $product->delete();

        return redirect()->route('products.index')
                         ->with('success', 'Product deleted successfully!');
    }
}
