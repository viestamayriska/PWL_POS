<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

    //     $data = [
    //         [
    //             'barang_id' => 1,
    //             'user_id' => 1,
    //             'stok_tanggal' => $now,
    //             'stok_jumlah' => 10,
    //             'created_at' => $now,
    //             'updated_at' => $now,
    //         ],
    //         [
    //             'barang_id' => 2,
    //             'user_id' => 2,
    //             'stok_tanggal' => $now,
    //             'stok_jumlah' => 15,
    //             'created_at' => $now,
    //             'updated_at' => $now,
    //         ],
    //         [
    //             'barang_id' => 3,
    //             'user_id' => 2,
    //             'stok_tanggal' => $now,
    //             'stok_jumlah' => 5,
    //             'created_at' => $now,
    //             'updated_at' => $now,
    //         ],
    //         [
    //             'barang_id' => 4,
    //             'user_id' => 2,
    //             'stok_tanggal' => $now,
    //             'stok_jumlah' => 20,
    //             'created_at' => $now,
    //             'updated_at' => $now,
    //         ],
    //         [
    //             'barang_id' => 5,
    //             'user_id' => 3,
    //             'stok_tanggal' => $now,
    //             'stok_jumlah' => 30,
    //             'created_at' => $now,
    //             'updated_at' => $now,
    //         ],
    //     ];


    //    DB::table('t_stok')->insert($data);
    }
}
