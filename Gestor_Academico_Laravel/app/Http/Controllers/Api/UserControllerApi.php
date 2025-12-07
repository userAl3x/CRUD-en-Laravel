<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserControllerApi extends Controller
{
    public function me(Request $request)
    {
        return response()->json([
            'message' => 'Usuario autenticado y autorizado como admin',
            'user' => $request->user(),
        ]);
    }

}
