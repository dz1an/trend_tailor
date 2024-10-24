<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\User;
use Illuminate\Validation\ValidationException;
class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(Request $request): RedirectResponse
    {


            // Retrieve the authenticated user
        $user = Auth::user(); // This will give you the authenticated user
 // Authenticate the user
//  $request->authenticate();
        // Validate the request data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);
    
        // Check if the user exists
        $user = User::where('email', $request->email)->first();
    
        if (!$user) {
            // If user does not exist, return a specific message for the email
            throw ValidationException::withMessages([
                'email' => __('No account found with that email address.'),
            ]);
        }
    
        // If the user exists but the password is incorrect
        if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            // Return a specific message for incorrect password
            throw ValidationException::withMessages([
                'password' => __('The provided password is incorrect.'),
            ]);
        }
    
 // Regenerate the session to prevent session fixation attacks
 $request->session()->regenerate();

 // Redirect to the intended page based on user role
 $url = match($request->user()->role) {
     'client' => '/client-myaccount',  // Redirect to the client dashboard
     'designer' => '/designer/dashboard', // Redirect to the designer dashboard
     default => '/'  // Fallback for any role not explicitly handled
 };

 return redirect()->intended($url);
           
       
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
