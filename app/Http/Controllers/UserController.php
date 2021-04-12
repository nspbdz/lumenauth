<?php

namespace App\Http\Controllers;
// use App\User;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        // auth dipanggil dari bootstrap/app.php 
          // $app->routeMiddleware([
//   inisial auth  'auth' => App\Http\Middleware\Authenticate::class,
//              ]);
    }
    public function show($id){
        $user = User::find($id);
        
        if ($user) {
            return response()->json([
                'success' => true,
                'message' =>'User ditemukan',
                'data' => $user
                
            ], 201);
            // ])
        }  else {
            return response()->json([
                'success' => true,
                'message' =>'User tidak ditemukan',
                'data' => ''
            ], 404);

        }
    }

    //
}
