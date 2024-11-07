<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Exception;

use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    
public function viewPage(Request $request)
    {
       
        $query = Page::with('author');
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('name', 'like', "%{$search}%");
        }
        $query->orderBy('id', 'desc');
       

        $perPage = $request->input('per_page', 10);
        $pages = $query->paginate($perPage);
        

        if ($request->ajax()) {
            $html = view('admin.viewpage', compact('pages'))->render();
            return response()->json([
                'html' => $html,
                'pagination' => $pages->appends([
                    'search' => $request->search,
                    'category' => $request->category,
                    'per_page' => $perPage
                ])->links('vendor.pagination.bootstrap-4')->render()
            ]);
        }

        return view('admin.viewpage', compact('pages'));
    }

   

    

}
