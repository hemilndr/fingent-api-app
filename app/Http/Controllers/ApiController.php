<?php

namespace App\Http\Controllers;
use App\Http\Traits\ApiTrait;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class ApiController extends Controller
{
    use ApiTrait;
    /**
     * Send a users list as api response
     * @return json
     */
    public function getUserList()
    {
        $users = User::select('name','email')->limit(50)->get();
        if($users){ 
            $success['users'] =  $users;
   
            return $this->sendResponse($success, 'Success');
        } 
        else{ 
            return $this->sendError('Failed.', ['error'=>'No data found.']);
        } 
    }
}
