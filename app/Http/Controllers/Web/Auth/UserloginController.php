<?php

namespace App\Http\Controllers\Web\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
class UserloginController extends Controller
{
    public function login(Request $request){
        return view("auth.layouts.login");
    }

        /**
     * Handle an incoming authentication request.
     */

     public function userCheck(Request $request): RedirectResponse
     {
         // Validate the incoming request
         $request->validate([
             'username' => 'required|string',  // Validate the username
             'password' => 'required|string',  // Validate the password
         ]);
 
         // Check if the input is email or username
         $loginField = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
         
         // Attempt login
         if (Auth::attempt([$loginField => $request->username, 'password' => $request->password], $request->remember)) {
             // Regenerate session for security
             $request->session()->regenerate();
             
             // Redirect the user to their intended location or the shop route
             return redirect()->intended(route('user.shop'));
         }
 
         // If authentication fails, redirect back with error
         return back()->withErrors(['login' => 'Invalid username/email or password.'])->withInput();
     }
     
     /**
      * Handle logout functionality
      */
     public function destroy(Request $request): RedirectResponse
     {
         Auth::logout();
         $request->session()->invalidate();
         $request->session()->regenerateToken();
         return redirect('/home');
     }

}
