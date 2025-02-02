<?php

namespace App\Http\Controllers\Web\Auth;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Auth\LoginRequest;

class UserloginController extends Controller
{

    /**
     * Summary of login
     * @param \Illuminate\Http\Request $request
     * @return  View
     */
    public function login(Request $request){
        return view("auth.layouts.login");
    }
    
    
    /**
     * Handle an incoming authentication request.
     */
    // public function userCheck(Request $request): RedirectResponse
    // {
    //     // Validate the incoming request
    //     $request->validate([
    //         'username' => 'required|string',  
    //         'password' => 'required|string',  
    //     ]);

    //     // Determine if input is email or username
    //     $loginField = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'userName';

    //     // Attempt login
    //     if (Auth::attempt([$loginField => $request->username, 'password' => $request->password], $request->remember)) {
    //         $request->session()->regenerate();

    //         // Redirect to home page or dashboard after successful login
    //         return redirect()->route('user.shop')->with('success', 'Login successful!');
    //     }

    //     // If login fails, redirect back to login with error message
    //     return redirect()->route('user.login')->withErrors(['username' => 'Invalid username or password.']);
    // }



    public function userCheck(Request $request): RedirectResponse
       {
    // Validate the incoming request
    $request->validate([
        'username' => 'required|string',  
        'password' => 'required|string',  
    ]);

    // Determine if input is email or username
    $loginField = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'userName';

    // Attempt login
    if (Auth::attempt([$loginField => $request->username, 'password' => $request->password], $request->remember)) {
        $request->session()->regenerate();

        // Check if the user is an admin or a regular user
        $user = Auth::user();
        
        if ($user->role === 'admin') {  // Assuming you have a role column
            return redirect()->route('dashboard')->with('success', 'Admin Login successful!');
        } else {
            return redirect()->route('user.shop')->with('success', 'User Login successful!');
        }
    }

    // If login fails, redirect back to login with error message
      return redirect()->route('login')->withErrors(['username' => 'Invalid username or password.']);
   }


    /**
     * Handle logout functionality
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::logout();

        // Invalidate the session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'You have been logged out.');
    }

}
