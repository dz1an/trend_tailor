<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    // public function store(Request $request): RedirectResponse
    // {
    //     // $request->validate([
    //     //     'name' => ['required', 'string', 'max:255'],
    //     //     'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
    //     //     'password' => ['required', 'confirmed', Rules\Password::defaults()],
    //     // ]);

    //     $user = User::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'password' => Hash::make($request->password),
    //     ]);

    //     event(new Registered($user));

    //     Auth::login($user);

    //     return redirect(RouteServiceProvider::HOME);
    // }

       public function store(Request $request): RedirectResponse
     { 
         try {
             // Fetch validated data directly into $data
            //  $data = $request->validated();
             
             $user = new User;
            
             $user->first_name = $request['first_name'];
             $user->last_name = $request['last_name'];
             $user->email = $request['email'];
         
             $user->password = bcrypt($request['password']); // Hash the password for security
             $user->role = $request['role'];
            //  dd($user);
             $user->save();
             
             return redirect('/login')->with('message', 'Registered successfully');
         } catch(\Exception $ex) {
             dd($ex);
             return redirect('/register')->with('message', 'Something went wrong');
         }
     }
//     public function store(Request $request)
//     {
//         // // Validate the incoming request data
//         // $validator = Validator::make($request->all(), [
//         //     'first_name' => 'required|string|max:255',
//         //     'last_name' => 'required|string|max:255',
//         //     'email' => 'required|email|unique:users,email',
//         //     'password' => 'required|string|min:8', // Removed password confirmation validation
//         // ]);

//         // // Check if validation fails
//         // if ($validator->fails()) {
//         //     return response()->json([
//         //         'success' => false,
//         //         'message' => $validator->errors()->first() // Return the first validation error
//         //     ], 422);
//         // }

//         try {
//             // Create a new user instance
//             $user = new User();
//             $user->first_name = $request->first_name;
//             $user->last_name = $request->last_name;
//             $user->email = $request->email;
//             $user->password = bcrypt($request->password); // Hash the password for security
//             $user->role = $request['role']; // Set default role or handle it as needed

//             // Save the user to the database
//             $user->save();
// dd($user')
//             return response()->json([
//                 'success' => true,
//                 'message' => 'Registration successful!'
//             ]);
//         } catch (\Exception $ex) {
//             // Handle any exceptions that may occur
//             return response()->json([
//                 'success' => false,
//                 'message' => 'Something went wrong. Please try again.'
//             ], 500);
//         }
//     }
}
