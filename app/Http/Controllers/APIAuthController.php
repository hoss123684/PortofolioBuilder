<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Jetstream\Jetstream;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Actions\Fortify\CreateNewUser;
use Illuminate\Support\Facades\Validator;
use App\Actions\Fortify\PasswordValidationRules;
use App\Models\User;

class APIAuthController extends Controller
{
    use HasApiTokens;
    use PasswordValidationRules;

    protected $createNewUser;

    public function __construct(CreateNewUser $createNewUser)
    {
        $this->createNewUser = $createNewUser;
    }

    public function register(Request $request)
{
    try {
        $input = $request->all();

        // Validate the input
        $validator = Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'password_confirmation' => ['required', 'same:password'],
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
            'specialty' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'max:14'],
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Create the user
        $user = $this->createNewUser->create($input);

        // Generate the token
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'user' => $user,
            'access_token' => $token,
            'token_type' => 'Bearer',
        ], 201);
    } catch (\Exception $e) {
        // Log the error
        Log::error('User Registration Failed', [
            'error' => $e->getMessage(),
            'trace' => $e->getTraceAsString()
        ]);

        return response()->json(['error' => 'Registration failed.'], 500);
    }
}

    public function login(Request $request)
    {
        try {
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                $user = Auth::user();

                if (!$user instanceof User) {
                    return response()->json(['error' => 'Authenticated user is not an instance of User model'], 500);
                }

                // Create and return the Sanctum API token for the logged-in user
                return response()->json([
                    'user' => $user,
                    'token' => $user->createToken('auth_token')->plainTextToken,
                ]);
            }

            return response()->json(['error' => 'Invalid credentials'], 401);
        } catch (\Exception $e) {
            Log::error('User Login Failed', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            return response()->json(['error' => 'Login failed.'], 500);
        }
    }
public function logout(Request $request)
{
    try {
        $user = $request->user();

        // Revoke all tokens for the user
        $user->tokens()->delete();

        return response()->json(['message' => 'Successfully logged out']);
    } catch (\Exception $e) {
        Log::error('User Logout Failed', [
            'error' => $e->getMessage(),
            'trace' => $e->getTraceAsString()
        ]);

        return response()->json(['error' => 'Logout failed.'], 500);
    }
}
}
