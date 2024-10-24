<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // Membuat pengguna baru
        $user = UserModel::create([
            'username' => 'manager11',
            'nama' => 'Manager11',
            'password' => Hash::make('12345'),
            'level_id' => 2,
        ]);

        // Mengubah username
        $user->username = 'manager12';

        // Menyimpan perubahan
        $user->save();

        // Memeriksa perubahan
        $wasChanged = $user->wasChanged(); // true
        $wasChangedUsername = $user->wasChanged('username'); // true
        $wasChangedArray = $user->wasChanged(['username', 'level_id']); // true
        $wasChangedNama = $user->wasChanged('nama'); // false

        // Menampilkan hasil pemeriksaan perubahan
        dd($user->wasChanged(['nama', 'username'])); // true
    }
}
