<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Business;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CustomRegisteredUserController extends Controller
{
    /**
     * CustomRegisteredUserController handles the registration process for new users.
     * 
     * Changes made:
     * - Added validation for form input in the register method.
     * - Created a user and linked business upon successful registration.
     * - Redirected to the login page after successful registration.
     * 
     * Expected result:
     * - Users will be able to register with their personal and business details.
     * - Validation errors will be displayed if the input does not meet the specified criteria.
     * - Upon successful registration, users will be redirected to the login page with a success message.
     * 
     * Directory to the register view: resources/views/auth/register.blade.php
     */
    public function create()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Validate form input
        $validator = Validator::make($request->all(), [
            'first_name'    => 'required|max:20',
            'last_name'     => 'required|max:20',
            'email'         => 'required|email|unique:users,email|max:255',
            'phone_number'  => 'required|max:12|unique:users,phone_number',
            'password'      => 'required|confirmed|min:8',
            'business_name' => 'required|max:255',
            'business_type' => 'required',
            'business_location' => 'required|max:255',
            'terms'         => 'accepted',
        ]);

        // Check for validation errors
        if ($validator->fails()) 
        {
            return back()->withErrors($validator)->withInput();
        }

        // Create the user
        $user = User::create([
            'first_name'    => $request->first_name,
            'last_name'     => $request->last_name,
            'email'         => $request->email,
            'phone_number'  => $request->phone_number,
            'password'      => Hash::make($request->password),
            'terms_accepted' => $request->terms,
        ]);

        // Create the business linked to the user
        Business::create([
            'user_id'           => $user->id,
            'business_name'     => $request->business_name,
            'business_type'     => $request->business_type,
            'business_location' => $request->business_location,
        ]);

        // Redirect to the login page after successful registration
        return redirect()->route('login')->with('success', 'Registration successful! Please log in with your new credentials.');
    }
}