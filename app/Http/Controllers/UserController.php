<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // Hashing password and defining user details
        $data = [
            'level_id' => 2,
            'username' => 'manager_tiga',
            'nama' => 'Manager 3',
            'password' => Hash::make('12345')
        ];

        // Retrieve the count of users with level_id 2
        $user = UserModel::where('level_id', 2)->count();

        // Pass data to the view
        return view('user', ['data' => $user]);
    }
}
