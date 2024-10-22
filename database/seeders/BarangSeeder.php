<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        $data = [
            [
                'kategori_id' => 1,
                'barang_kode' => 'BRG001',
                'barang_nama' => 'Televisi',
                'harga_beli' => 2000000,
                'harga_jual' => 2500000,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'kategori_id' => 1,
                'barang_kode' => 'BRG002',
                'barang_nama' => 'Kulkas',
                'harga_beli' => 3000000,
                'harga_jual' => 3500000,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'kategori_id' => 1,
                'barang_kode' => 'BRG003',
                'barang_nama' => 'Mesin Cuci',
                'harga_beli' => 1500000,
                'harga_jual' => 2000000,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'BRG004',
                'barang_nama' => 'Kaos',
                'harga_beli' => 50000,
                'harga_jual' => 70000,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'BRG005',
                'barang_nama' => 'Celana Panjang',
                'harga_beli' => 100000,
                'harga_jual' => 130000,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'BRG006',
                'barang_nama' => 'Jaket',
                'harga_beli' => 150000,
                'harga_jual' => 200000,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'BRG007',
                'barang_nama' => 'Nasi Goreng',
                'harga_beli' => 10000,
                'harga_jual' => 15000,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'BRG008',
                'barang_nama' => 'Mie Ayam',
                'harga_beli' => 12000,
                'harga_jual' => 17000,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'BRG009',
                'barang_nama' => 'Sate Ayam',
                'harga_beli' => 20000,
                'harga_jual' => 25000,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => 'BRG010',
                'barang_nama' => 'Teh Botol',
                'harga_beli' => 5000,
                'harga_jual' => 8000,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => 'BRG011',
                'barang_nama' => 'Coca Cola',
                'harga_beli' => 7000,
                'harga_jual' => 10000,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => 'BRG012',
                'barang_nama' => 'Mineral Water',
                'harga_beli' => 3000,
                'harga_jual' => 5000,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => 'BRG013',
                'barang_nama' => 'Sapu',
                'harga_beli' => 15000,
                'harga_jual' => 20000,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => 'BRG014',
                'barang_nama' => 'Ember',
                'harga_beli' => 20000,
                'harga_jual' => 25000,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => 'BRG015',
                'barang_nama' => 'Lap',
                'harga_beli' => 5000,
                'harga_jual' => 8000,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        DB::table('m_barang')->insert($data);
    }
}
