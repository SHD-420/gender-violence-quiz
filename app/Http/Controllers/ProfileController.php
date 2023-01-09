<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $creds = $request->validate([
            'email' => ['required', 'email', Rule::unique('users')->ignore(Auth::user())],
            'name' => ['required'],
            'gender' => ['required', 'in:m,f'],
            'age' => ['required', 'numeric'],
        ]);

        Auth::user()->update($creds);
        return redirect()->route('dashboard')->with('success-message','¡Perfil actualizado con éxito!');
    }
}
