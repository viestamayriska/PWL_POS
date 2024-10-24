<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // Pastikan password ditetapkan dengan benar
        $data = [
            'level_id' => 2,
            'username' => 'manager_tiga',
            'nama' => 'Manager 3',
            'password' => Hash::make('12345') // Hash password
        ];

    // Coba untuk membuat pengguna baru
    // UserModel::create($data);
    // $data = UserModel::all();
    // Mengambil data pengguna yang baru dibuat
    //$user = UserModel::where('username', 'manager_tiga')->first(); // Ambil pengguna berdasarkan username
    //  $user = UserModel::find(1); 
    //$user = UserModel::firstWhere('level_id', 1);

     $user = UserModel::findOr(1, ['username', 'nama'], function () {
        abort(404);
    });
    

       return view('user', ['data' => $user]);
    }
}

