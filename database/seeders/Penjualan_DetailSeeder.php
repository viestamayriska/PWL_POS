<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Penjualan_DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        // // Mengasumsikan kita memiliki 10 transaksi penjualan dari PenjualanSeeder sebelumnya
        // // dan 3 barang yang akan kita gunakan untuk setiap transaksi
        // $data = [];

        // // Misalnya barang_id yang kita gunakan adalah 1, 2, dan 3
        // $barangIds = [1, 2, 3];

        // for ($penjualanId = 1; $penjualanId <= 10; $penjualanId++) {
        //     foreach ($barangIds as $barangId) {
        //         $data[] = [
        //             'penjualan_id' => $penjualanId,
        //             'barang_id' => $barangId,
        //             'jumlah' => rand(1, 10),  // Jumlah barang yang terjual, bisa bervariasi
        //             'harga' => rand(10000, 50000),  // Harga barang yang terjual, bisa bervariasi
        //             'created_at' => $now,
        //             'updated_at' => $now,
        //         ];
        //     }
        // }

        // // Menambahkan total 30 detail transaksi penjualan
        // DB::table('t_penjualan_detail')->insert($data);
    }
}
