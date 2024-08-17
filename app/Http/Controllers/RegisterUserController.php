<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class RegisterUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
 
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $userAttributes = $request->validate([
        'name'=>['required','string',''],
        'email'=>['required','email','unique:users,email'],
        'password'=>['required','confirmed',Password::min(6)],
      ]);
      
      $employerAttributes = $request->validate([
'employer'=>['required',],
'logo'=>['required',File::types(['png','jpg','webp'])]
      ]);
      
      $user = User::create($userAttributes);

$logo_url = $request->logo->store('logos');

      $user->employer()->create([
        'user_id'=> $user->id,
        'name'=>$employerAttributes['employer'],
        'logo'=>$logo_url,
      ]);

      Auth::login($user);
return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
