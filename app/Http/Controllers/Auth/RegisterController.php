<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected string $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest');
    }


    protected function validator(array $data): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'image' => ['required', 'file'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }


    protected function create(array $data)
    {
        if (request()->has('image')) {
            $image = request()->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->storeAs('public/profile_images', $imageName);
            $profileImagePath = 'profile_images/'.$imageName;
        } else {
            $profileImagePath = 'default/path/to/default_image.jpg'; // or whatever your default path is
        }

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'profile_image' => $profileImagePath, // make sure you have 'profile_image' column in your users table
        ]);
    }
}
