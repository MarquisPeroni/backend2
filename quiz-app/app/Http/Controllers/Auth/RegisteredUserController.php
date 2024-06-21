<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return response()->json(['user' => $user], 201);
    }

    /**
     * Get the results for a specific user.
     */
    public function results(User $user)
    {
        $currentUser = Auth::user();
        logger()->info('Current user ID: ' . $currentUser->id); // Log per verificare l'utente attualmente autenticato
        logger()->info('Requested user ID: ' . $user->id); // Log per verificare l'utente richiesto

        Gate::authorize('view', $user);
        
        $results = $user->results()->with('quiz')->get();

        return response()->json($results);
    }
}
