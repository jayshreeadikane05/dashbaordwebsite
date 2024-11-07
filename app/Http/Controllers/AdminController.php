<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\FormEntry;
use App\Models\Subscription;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use App\Exports\FormEntriesExport;
use App\Exports\NewsletterExport;


class AdminController extends Controller
{
    public function index()
    {
        $admin = Auth::guard('admin')->user();
        return view('admin.dashboard', ['adminName' => $admin->name]);
    }

    public function contactentrie(Request $request)
    {
        try {
            $query = FormEntry::query();
    
            if ($request->has('search')) {
                $search = $request->input('search');
                $query->where('name', 'like', '%' . $search . '%')
                      ->orWhere('email', 'like', '%' . $search . '%');
            }
    
            $perPage = $request->input('per_page', 10); 
            $ContactFormentries = $query->paginate($perPage);
    
            if ($request->ajax()) {
                $html = view('admin.contactentrie', compact('ContactFormentries'))->render();
                return response()->json([
                    'html' => $html,
                    'pagination' => $ContactFormentries->appends(['search' => $request->search, 'per_page' => $perPage])->links('vendor.pagination.bootstrap-4')->render()
                ]);
            }
    
            return view('admin.contactentrie', compact('ContactFormentries'));
        } catch (\Exception $e) {
    
            if ($request->ajax()) {
                return response()->json(['error' => 'An error occurred while fetching the contact entries.'], 500);
            }
    
            return redirect()->back()->with('error', 'An error occurred while fetching the contact entries.');
        }
    }
    

    public function export(Request $request)
    {
        try {
            $type = $request->input('type');
            $query = FormEntry::query();
    
            if ($request->has('search')) {
                $search = $request->input('search');
                $query->where('name', 'like', '%' . $search . '%')
                      ->orWhere('email', 'like', '%' . $search . '%');
            }
    
            $entries = $query->get();
    
            switch ($type) {
                case 'excel':
                    return Excel::download(new FormEntriesExport($entries), 'contact_form_entries.xlsx');
                case 'pdf':
                    $pdf = PDF::loadView('admin.contactentrie', compact('entries'));
                    return $pdf->download('contact_form_entries.pdf');
                default:
                    return redirect()->back()->with('error', 'Invalid export type');
            }
        } catch (\Exception $e) {
           
    
            if ($request->ajax()) {
                return response()->json(['error' => 'An error occurred while exporting the contact entries.'], 500);
            }
    
            return redirect()->back()->with('error', 'An error occurred while exporting the contact entries.');
        }
    }
    




public function newsletterentries(Request $request)
{
    $query = Subscription::query();

    if ($request->has('search')) {
        $search = $request->input('search');
        $query->where('email', 'like', '%' . $search . '%');
    }

    $perPage = $request->input('per_page', 10); 
    $NewsletterFormentries = $query->paginate($perPage);

    if ($request->ajax()) {
        $html = view('admin.newsletterentries', compact('NewsletterFormentries'))->render();
        return response()->json([
            'html' => $html,
            'pagination' => $NewsletterFormentries->appends(['search' => $request->search, 'per_page' => $perPage])->links('vendor.pagination.bootstrap-4')->render()
        ]);
    }

    return view('admin.newsletterentries', compact('NewsletterFormentries'));
}


public function exportNewsletter(Request $request)
{
    $type = $request->input('type');
    $query = Subscription::query();

    if ($request->has('search')) {
        $search = $request->input('search');
        $query->where('email', 'like', '%' . $search . '%');
           
    }

    $NewsLetterentries = $query->get(); 

    switch ($type) {
        case 'excel':
            return Excel::download(new NewsletterExport($NewsLetterentries), 'newsletter_form_entries.xlsx');
        case 'pdf':
            $pdf = PDF::loadView('admin.newsletterentries', compact('entries'));
            return $pdf->download('newsletter_form_entries.pdf');
        default:
            return redirect()->back()->with('error', 'Invalid export type');
    }
}


}

