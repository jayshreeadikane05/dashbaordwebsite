<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use Illuminate\Support\Facades\Log;
use Exception;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;
class VideoController extends Controller
{
            public function showForm()
        {
            $categories = Category::orderBy('id', 'desc')->get();
            $tags = Tag::orderBy('id', 'desc')->get(); 
            return view('admin.addvideo', compact('categories', 'tags')); 
        }
        public function store(Request $request)
        {
            try {
                $video = new Video();
                $video->name = $request->input('videoname');
                $video->description = $request->input('description');
    
                if ($request->hasFile('video')) {
                    $videoName = time() . '.' . $request->video->extension();
                    $request->video->move(public_path('videos'), $videoName);
                    $video->video = 'videos/' . $videoName;
                }
    
                $video->categories = json_encode($request->input('categories', []));
                $video->tag = json_encode($request->input('tag', []));
                $video->author_id = Auth::id(); 
                $video->save();
    
                return response()->json([
                    'status' => 'true',
                    'message' => 'Video created successfully.',
                    
                ], 200);
            } catch (\Exception $e) {
                \Log::error('Failed to create Vide: ' . $e->getMessage(), [
                    'request' => $request->all(),
                    'exception' => $e,
                ]);
                return response()->json([
                    'status' => 'false',
                    'message' => 'Failed to create Video.'
                ], 500);
            }
        }


        public function viewvideo(Request $request)
        {
          
            $query = Video::with('author');
            if ($request->has('search')) {
                $search = $request->input('search');
                $query->where('name', 'like', "%{$search}%");
            }
            $query->orderBy('id', 'desc');
            if ($request->has('category')) {
                $category = $request->input('category');
                $query->whereJsonContains('categories', $category);
            }
    
            $perPage = $request->input('per_page', 10);
            $videos = $query->paginate($perPage);
            $categories = Category::all()->keyBy('id');
            $tag=Tag::all()->keyBy('id');
    
            if ($request->ajax()) {
                $html = view('admin.viewvideo', compact('videos', 'categories', 'tag'))->render();
                return response()->json([
                    'html' => $html,
                    'pagination' => $videos->appends([
                        'search' => $request->search,
                        'category' => $request->category,
                        'per_page' => $perPage
                    ])->links('vendor.pagination.bootstrap-4')->render()
                ]);
            }
    
            return view('admin.viewvideo', compact('videos', 'categories', 'tag'));
        }

        public function delete($id, Request $request)
    {
        try {
            $video = Video::findOrFail($id);
            
    
            $video->delete();
    
            return response()->json([
                'status' => 'true',
                'message' => 'Video deleted successfully.'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'false',
                'message' => 'Failed to delete Video.'
            ], 500);
        }
    }


    public function edit($id, Request $request)
    {
        try {
            $video = Video::findOrFail($id);
    
            $categories = Category::orderBy('id', 'desc')->get();
            $tags = Tag::orderBy('id', 'desc')->get(); 
            $videoCategories = json_decode($video->categories, true) ?? [];
            $videoTags = json_decode($video->tag, true) ?? []; 
    
            if ($request->ajax()) {
                return response()->json([
                    'status' => 'true',
                    'message' => 'Video data fetched successfully.',
                    'data' => [
                        'video' => $video,
                        'categories' => $categories,
                        'videoCategories' => $videoCategories,
                        'tags' => $tags, 
                        'videoTags' => $videoTags,
                    ]
                ], 200);
            }
    
            return view('admin.editvideo', compact('video', 'categories', 'videoCategories', 'tags', 'videoTags'));
    
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'false',
                'message' => 'Failed to fetch video data: ' . $e->getMessage()
            ], 500);
        }
    }
    

    public function update(Request $request)
    {
        try {
          
            $id = (int) $request->id; 
            $video = Video::find($id);
            if (!$video) {
                return response()->json(['status' => 'false', 'message' => 'Video not found.']);
            }
    
            $video->name = $request->videoname;
          
            $video->description = $request->description;
    
          

            if ($request->hasFile('video')) {
                $videoName = time() . '.' . $request->video->extension();
                $request->video->move(public_path('videos'), $videoName);
                $video->video = 'videos/' . $videoName;
            }
    
            $video->categories = json_encode($request->input('categories', []));
            $video->tag = json_encode($request->input('tag', []));
            $video->save();
    
            return response()->json([
                'status' => 'true',
                'message' => 'Video updated successfully.',
                'redirect_url' => route('admin.viewvideo')

            ], 200);
        } catch (\Exception $e) {
            Log::error('Error updating video: ' . $e->getMessage());
    
            return response()->json([
                'status' => 'false',
                'message' => 'Failed to update video.'
            ], 500);
        }
    }
   
    
    
        
}
