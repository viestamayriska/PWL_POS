<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $data = [
            [
                'supplier_kode' => $faker->unique()->lexify('SUP????'), // Random supplier code
                'supplier_nama' => $faker->company, // Random company name
                'supplier_alamat' => $faker->address, // Random address
            ],
            [
                'supplier_kode' => $faker->unique()->lexify('SUP????'),
                'supplier_nama' => $faker->company,
                'supplier_alamat' => $faker->address,
            ],
            [
                'supplier_kode' => $faker->unique()->lexify('SUP????'),
                'supplier_nama' => $faker->company,
                'supplier_alamat' => $faker->address,
            ],
        ];

        DB::table('m_supplier')->insert($data); // Insert data into the m_supplier table
    }
}
