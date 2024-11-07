<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
    
        $existingCategory = Category::where('name', $request->name)->first();
    
        if ($existingCategory) {
            return response()->json([
                'success' => false,
                'message' => 'Category already exists.',
                'category' => $existingCategory
            ]);
        }
    
        $category = Category::create(['name' => $request->name]);
    
        return response()->json([
            'success' => true,
            'category' => $category
        ]);
    }
    
    public function index(Request $request)
    {
        $query = Category::query();
    
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('name', 'like', "%{$search}%");
        }
    
        $query->orderBy('id', 'desc');
    
        $perPage = $request->input('per_page', 10);
        $categories = $query->paginate($perPage);
    
        if ($request->ajax()) {
            $html = view('admin.category', compact('categories'))->render();
            return response()->json([
                'html' => $html,
                'pagination' => $categories->appends([
                    'search' => $request->search,
                    'per_page' => $perPage
                ])->links('vendor.pagination.bootstrap-4')->render()
            ]);
        }
    
        return view('admin.category', compact('categories'));
    }

    public function edit($id, Request $request)
    {
        try {
            $category = Category::find($id);
    
            if (!$category) {
                return response()->json([
                    'status' => 'false',
                    'message' => 'Category not found.'
                ], 404);
            }
            if ($request->ajax()) {
            return response()->json([
                'status' => 'true',
                'message' => 'Category data fetched successfully.',
                'data' => [
                    'category' => $category
                    ]
            ], 200);
        }
            
        return view('admin.category', compact('category'));

        } catch (\Exception $e) {
            return response()->json([
                'status' => 'false',
                'message' => 'Failed to fetch category data.'
            ], 500);
        }
    }
    
    public function update($id, Request $request)
    {
       

        try {
            $category = Category::find($id);

            if (!$category) {
                return response()->json([
                    'status' => 'false',
                    'message' => 'Category not found.'
                ], 404);
            }

            $category->name = $request->name;
            $category->save();

            return response()->json([
                'status' => 'true',
                'message' => 'Category updated successfully.'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'false',
                'message' => 'Failed to update category.'
            ], 500);
        }
    }


    public function preview($id, Request $request)
{
    try {
        $category = Category::find($id);
        if (!$category) {
            return response()->json([
                'status' => 'false',
                'message' => 'Category not found',
            ], 404);
        }

        if ($request->ajax()) {
            return response()->json([
                'status' => 'true',
                'message' => 'Category data fetched successfully.',
                'data' => [
                    'name' => $category->name,
                    'created_at' => $category->created_at->format('F d, Y')
                ]
            ], 200);
        }

        // Non-Ajax request
        return view('admin.category', compact('category'));

    } catch (\Exception $e) {
        return response()->json([
            'status' => 'false',
            'message' => 'Failed to view Category'
        ], 500);
    }
}


    public function delete($id, Request $request)
    {
        try {
            $category = Category::findOrFail($id);
            $category->delete();
    
            return response()->json([
                'status' => 'true',
                'message' => 'Category deleted successfully.'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'false',
                'message' => 'Failed to delete category: ' . $e->getMessage()
            ], 500);
        }
    }
    
    
    



}
