<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Dynamic Registration (Assigns 'user' by default, or accepts 'admin')
    public function register(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users,email',
            'password' => 'required|string',
            'role' => 'nullable|string' // Allows passing an optional role character
        ]);

        $user = User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'password' => Hash::make($fields['password']),
            'role' => $fields['role'] ?? 'user' // Defaults to customer if left blank
        ]);

        $token = $user->createToken('fashion_token_for_' . $user->name)->plainTextToken;

        return response()->json([
            'status' => 'success',
            'message' => 'Account Created Successfully!',
            'user' => [
                'name' => $user->name,
                'email' => $user->email,
                'role' => $user->role
            ],
            'token' => $token
        ], 201);
    }

    // Dynamic Login (Looks up the role in the database on the fly)
    public function login(Request $request)
    {
        $fields = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);

        $user = User::where('email', $fields['email'])->first();

        if (!$user || !Hash::check($fields['password'], $user->password)) {
            return response()->json([
                'status' => 'error',
                'message' => 'Bad credentials. Please check your inputs.'
            ], 401);
        }

        // Creates a token passing the user's current database role as an ability scope
        $token = $user->createToken('fashion_token_for_' . $user->name, [$user->role])->plainTextToken;

        return response()->json([
            'status' => 'success',
            'message' => 'Logged in successfully!',
            'user' => [
                'name' => $user->name,
                'email' => $user->email,
                'role' => $user->role
            ],
            'token' => $token
        ], 200);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/'); // Redirects safely back to your Faith & Fashion welcome screen
    }
}
