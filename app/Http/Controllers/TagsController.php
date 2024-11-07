<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;


class TagsController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Check if the tag already exists
        $existingTag = Tag::where('name', $request->name)->first();

        if ($existingTag) {
            return response()->json([
                'success' => false,
                'message' => 'Tag already exists.',
                'tag' => $existingTag
            ]);
        }

        // Create a new tag
        $tag = Tag::create(['name' => $request->name]);

        return response()->json([
            'success' => true,
            'tag' => $tag
        ]);
    }
    
    public function index(Request $request)
    {
        $query = Tag::query();
    
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('name', 'like', "%{$search}%");
        }
    
        $query->orderBy('id', 'desc');
    
        $perPage = $request->input('per_page', 10);
        $tag = $query->paginate($perPage);
    
        if ($request->ajax()) {
            $html = view('admin.tag', compact('tag'))->render();
            return response()->json([
                'html' => $html,
                'pagination' => $tag->appends([
                    'search' => $request->search,
                    'per_page' => $perPage
                ])->links('vendor.pagination.bootstrap-4')->render()
            ]);
        }
    
        return view('admin.tag', compact('tag'));
    }

    public function edit($id, Request $request)
    {
        try {
            $tag = Tag::find($id);
    
            if (!$tag) {
                return response()->json([
                    'status' => 'false',
                    'message' => 'tag not found.'
                ], 404);
            }
            if ($request->ajax()) {
            return response()->json([
                'status' => 'true',
                'message' => 'Tags data fetched successfully.',
                'data' => [
                    'tag' => $tag
                    ]
            ], 200);
        }
            
        return view('admin.tag', compact('tag'));

        } catch (\Exception $e) {
            return response()->json([
                'status' => 'false',
                'message' => 'Failed to fetch tag data.'
            ], 500);
        }
    }
    
    public function update($id, Request $request)
    {
       

        try {
            $tag = Tag::find($id);

            if (!$tag) {
                return response()->json([
                    'status' => 'false',
                    'message' => 'tag not found.'
                ], 404);
            }

            $tag->name = $request->name;
            $tag->save();

            return response()->json([
                'status' => 'true',
                'message' => 'Tag updated successfully.'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'false',
                'message' => 'Failed to update Tag.'
            ], 500);
        }
    }


    public function preview($id, Request $request)
{
    try {
        $tag = Tag::find($id);
        if (!$tag) {
            return response()->json([
                'status' => 'false',
                'message' => 'Tag not found',
            ], 404);
        }

        if ($request->ajax()) {
            return response()->json([
                'status' => 'true',
                'message' => 'Tag data fetched successfully.',
                'data' => [
                    'name' => $tag->name,
                    'created_at' => $tag->created_at->format('F d, Y')
                ]
            ], 200);
        }

        return view('admin.tag', compact('tag'));

    } catch (\Exception $e) {
        return response()->json([
            'status' => 'false',
            'message' => 'Failed to view tag'
        ], 500);
    }
}


    public function delete($id, Request $request)
    {
        try {
            $tag = Tag::findOrFail($id);
            $tag->delete();
    
            return response()->json([
                'status' => 'true',
                'message' => 'Tag deleted successfully.'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'false',
                'message' => 'Failed to delete tag: ' . $e->getMessage()
            ], 500);
        }
    }
}
