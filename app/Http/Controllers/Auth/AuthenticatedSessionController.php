<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

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
    public function store(LoginRequest $request): RedirectResponse
    {
            // Retrieve the authenticated user
        $user = Auth::user(); // This will give you the authenticated user
 // Authenticate the user
 $request->authenticate();
    
 // Regenerate the session to prevent session fixation attacks
 $request->session()->regenerate();

 // Redirect to the intended page based on user role
 $url = match($request->user()->role) {
     'client' => '/dashboard',  // Redirect to the client dashboard
     'designer' => 'designer/dashboard', // Redirect to the designer dashboard
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
