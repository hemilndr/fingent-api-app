<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    
    /**
     * Send a users list as api response
     * @return json
     */
    public function getUserList()
    {
        $users = User::select('name','email')->limit(50)->get();

        return response()->json(['users' => $users], 200); 
    }
}
