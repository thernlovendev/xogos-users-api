<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $elements = User::select('username', 'email','password')->get();

        return Response($elements, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function user(Request $request): Response
    {
        $request->validate([
            'email' => 'required | email | exists:users,email',
            'username' => 'exists:users,username',
        ]);
        
        $element = User::where('email',$request->email)->orWhere('username',$request->username)->select('username', 'email','password')->first();
        
        return Response($element, 200);
    }

}
