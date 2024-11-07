<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\AdminUser;
class AdminAuthController extends Controller
{
    public function __construct()
{
    $this->middleware('guest:admin')->only(['showLoginForm', 'login']);
    $this->middleware('auth:admin')->except(['showLoginForm', 'login', 'showCreateUserForm']);
}
    public function showLoginForm()
    {
        return view('admin.login');
    }
    public function showCreateUserForm()
    {
        return view('admin.create-user');
    }


    public function storeUser(Request $request)
    {
        try {
            $user = new AdminUser();
            $user->first_name = $request->input('first_name');
            $user->last_name = $request->input('last_name');
            $user->email = $request->input('email');
            $user->mobile_no = $request->input('mobile_no');
            $user->password = bcrypt($request->input('password'));
            $user->role = $request->input('role');
            $user->save();
    
            return response()->json([
                'status' => true,
                'message' => 'User created successfully!',
            ]);
        } catch (\Exception $e) {
            \Log::error('Failed to create user: ' . $e->getMessage());
            return response()->json([
                'status' => false,
                'message' => 'Failed to create user!',
            ], 500);
        }
    }
    public function getUsers(Request $request)
{
    try {
        $query = AdminUser::query();

        // Optional: Add search functionality
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('first_name', 'like', "%{$search}%")
                  ->orWhere('last_name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%");
        }

        // Pagination
        $perPage = $request->input('per_page', 10);
        $users = $query->paginate($perPage);

        if ($request->ajax()) {
            return response()->json([
                'users' => $users,
                'pagination' => [
                    'total' => $users->total(),
                    'current_page' => $users->currentPage(),
                    'last_page' => $users->lastPage(),
                    'per_page' => $users->perPage(),
                ]
            ]);
        }

        return view('admin.viewUsers', compact('users'));
        
    } catch (\Exception $e) {
        \Log::error('Failed to retrieve users: ' . $e->getMessage());
        return response()->json([
            'status' => false,
            'message' => 'Failed to retrieve users!',
        ], 500);
    }
}


    public function login(Request $request)
    {
        try {
            $credentials = $request->only('email', 'password');
    
            if (Auth::guard('admin')->attempt($credentials)) {
                $user = Auth::guard('admin')->user(); 
                session(['adminName' => $user->first_name]); 
                \Log::info('Admin Name in Session: ' . session('adminName'));
                toastr()->success('Login successful');
                return redirect()->intended('/admin/dashboard')->with('adminName', $user->first_name);
            }
    
            toastr()->error('Email or password are incorrect');
            return redirect()->back()->withErrors(['email' => 'Email or password are incorrect']);
        } catch (\Exception $e) {
            toastr()->error('An error occurred during login');
            return redirect()->back()->withErrors(['error' => 'An error occurred during login']);
        }
    }
    

    public function logout()
    {
        try {
            Auth::guard('admin')->logout();
            toastr()->success('Logged out successfully');
        } catch (\Exception $e) {
            toastr()->error('An error occurred while logging out');
        }

        return redirect('/admin/login');
    }
}
