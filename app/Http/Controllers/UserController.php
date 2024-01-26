<?php

namespace App\Http\Controllers;

use App\Models\User;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RequestController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        // Recherche d'un utilisateur avec l'email fourni dans la table 'users'
        $user = User::where('email', $credentials['email'])->first();

        if ($user && Hash::check($credentials['password'], $user->password)) {

            $token = $user->createToken('authToken')->plainTextToken;
    
            return response()->json([
                'token' => $token,
                'user' => $user,
            ], 200);
        } else {
            return response()->json([
                'error' => 'Informations invalides',
            ], 401);
        }
    }

    public function show(Request $Request)
    {
        //
    }

    public function edit(Request $Request)
    {
        //
    }

    public function update(Request $request)
    {
        //
    }

    public function destroy(Request $Request)
    {
        //
    }
}
