<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Category::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = Category::create([
            ...$request->validate([
                'name' => 'required|string|max:20',
                'description' => 'required',
            ])
        ]);

        return $category;
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        // $category->load('products');
        return $category;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Category $category)
    {
        $category->update(
            $request->validate([
                'name' => 'required|string|max:20',
                'description' => 'required',
            ])
        );

        return $category;
    }


    public function destroy(string $id)
    {
        //  
        // $category->delete();

        return response(status: 204);
    }
    
}