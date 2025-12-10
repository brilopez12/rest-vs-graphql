<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * GET /api/users
     * Retorna lista de usuarios
     */
    public function index(): JsonResponse
    {
        $users = User::orderBy('id', 'desc')->get();

        return response()->json([
            'success' => true,
            'data' => $users
        ], 200);
    }

    /**
     * POST /api/users
     * Crea un nuevo usuario
     */
    public function store(Request $request): JsonResponse
    {
        // Validación
        $validator = Validator::make($request->all(), [
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|string|min:6'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors'  => $validator->errors()
            ], 422);
        }

        // Creación del usuario
        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password), // IMPORTANTE: encriptar
        ]);

        return response()->json([
            'success' => true,
            'data'    => $user
        ], 201);
    }
}