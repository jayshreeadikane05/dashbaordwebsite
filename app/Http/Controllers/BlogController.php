<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Log;
use Exception;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;
class BlogController extends Controller
{
    public function showForm()
{
    $categories = Category::orderBy('id', 'desc')->get();
    $tags = Tag::orderBy('id', 'desc')->get(); 
    return view('admin.addblog', compact('categories', 'tags')); 
}

    

    public function viewBlog(Request $request)
    {
       
        $query = Blog::with('author');
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('name', 'like', "%{$search}%")
                ->orWhere('subheading', 'like', "%{$search}%");
        }
        $query->orderBy('id', 'desc');
        if ($request->has('category')) {
            $category = $request->input('category');
            $query->whereJsonContains('categories', $category);
        }

        $perPage = $request->input('per_page', 10);
        $blogs = $query->paginate($perPage);
        $categories = Category::all()->keyBy('id');
        $tag=Tag::all()->keyBy('id');

        if ($request->ajax()) {
            $html = view('admin.viewblog', compact('blogs', 'categories', 'tag'))->render();
            return response()->json([
                'html' => $html,
                'pagination' => $blogs->appends([
                    'search' => $request->search,
                    'category' => $request->category,
                    'per_page' => $perPage
                ])->links('vendor.pagination.bootstrap-4')->render()
            ]);
        }

        return view('admin.viewblog', compact('blogs', 'categories', 'tag'));
    }

    public function edit($id, Request $request)
{
    try {
        $blog = Blog::findOrFail($id);

        $categories = Category::orderBy('id', 'desc')->get();
        $tags = Tag::orderBy('id', 'desc')->get(); 
        $blogCategories = json_decode($blog->categories, true) ?? [];
        $blogTags = json_decode($blog->tag, true) ?? []; 

        if ($request->ajax()) {
            return response()->json([
                'status' => 'true',
                'message' => 'Blog data fetched successfully.',
                'data' => [
                    'blog' => $blog,
                    'categories' => $categories,
                    'blogCategories' => $blogCategories,
                    'tags' => $tags, 
                    'blogTags' => $blogTags,
                ]
            ], 200);
        }

        return view('admin.editblog', compact('blog', 'categories', 'blogCategories', 'tags', 'blogTags'));

    } catch (\Exception $e) {
        return response()->json([
            'status' => 'false',
            'message' => 'Failed to fetch blog data: ' . $e->getMessage()
        ], 500);
    }
}


    public function previewblog($id, Request $request){
        try {
            $blog =Blog::find($id);
            if( !$blog) {
              return response()-> json([
                'status' => 'false',
                'message' => 'Not Found Blog'
              ], 404);  
            }
            $categories = Category::all();
            $blogCategories = json_decode($blog->categories, true) ?? [];
            if($request->ajax()){
                return response()-> json([
                    'status' => 'true',
                    'message' =>'Blog Fetched Successfully',
                    'data' => [
                        'blog' => $blog,
                        'categories' => $categories,
                        'blogCategories' => $blogCategories
                    ]
                    ], 200);
            }

            return view('admin.previewblog', compact('blog', 'categories', 'blogCategories'));
        }catch(Exception $e){
                return response() -> json([
                    'status' => 'false',
                    'message' => 'failed to fetch blog data.'
                ], 500);
        }
    }


    public function update(Request $request)
    {
        try {
          
            $id = (int) $request->id; 
            $blog = Blog::find($id);
            if (!$blog) {
                return response()->json(['status' => 'false', 'message' => 'Blog not found.']);
            }
    
            $blog->name = $request->blogname;
            $blog->subheading = $request->subheading;
            $blog->description = $request->description;
    
            if ($request->hasFile('blogimage')) {
                $imageName = time() . '.' . $request->blogimage->extension();
                $request->blogimage->move(public_path('images'), $imageName);
                $blog->blogimage = 'images/' . $imageName;
            }
    
            $blog->categories = json_encode($request->input('categories', []));
            $blog->tag = json_encode($request->input('tag', []));
            $blog->save();
    
            return response()->json([
                'status' => 'true',
                'message' => 'Blog updated successfully.',
                'redirect_url' => route('admin.viewblog')

            ], 200);
        } catch (\Exception $e) {
            Log::error('Error updating blog: ' . $e->getMessage());
    
            return response()->json([
                'status' => 'false',
                'message' => 'Failed to update blog.'
            ], 500);
        }
    }
    public function uploadImage(Request $request)
{
    if ($request->hasFile('files')) {
        $imageName = time() . '.' . $request->file('files')->extension();
        $request->file('files')->move(public_path('images'), $imageName);

        // Return a response that indicates success
        return response()->json([
            'status' => 'true',
            'image_url' => 'images/' . $imageName
        ]);
    }

    return response()->json(['status' => 'false', 'message' => 'File not found']);
}

    public function store(Request $request)
    {
        try {
            $blog = new Blog();
            $blog->name = $request->input('blogname');
            $blog->subheading = $request->input('subheading');
            $blog->description = $request->input('description');

            if ($request->hasFile('blogimage')) {
                $imageName = time() . '.' . $request->blogimage->extension();
                $request->blogimage->move(public_path('images'), $imageName);
                $blog->blogimage = 'images/' . $imageName;
            }
            
            $blog->categories = json_encode($request->input('categories', []));
            $blog->tag = json_encode($request->input('tag', []));
            $blog->author_id = Auth::id(); 
            $blog->save();

            return response()->json([
                'status' => 'true',
                'message' => 'Blog created successfully.',
                'redirect_url' => route('admin.viewblog')
            ], 200);
        } catch (\Exception $e) {
            \Log::error('Failed to create blog: ' . $e->getMessage(), [
                'request' => $request->all(), // Log the entire request data
                'exception' => $e, // Log the exception object
            ]);
            return response()->json([
                'status' => 'false',
                'message' => 'Failed to create blog.'
            ], 500);
        }
    }

    public function delete($id, Request $request)
    {
        try {
            $blog = Blog::findOrFail($id);
            
    
            $blog->delete();
    
            return response()->json([
                'status' => 'true',
                'message' => 'Blog deleted successfully.'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'false',
                'message' => 'Failed to delete blog.'
            ], 500);
        }
    }
    



}
