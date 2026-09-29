<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produk')->insert([
            ['nama' => 'indomie', 'harga' => 3000, 'stok' => 50, 'created_at' => now() ,'updated_at' => now() ],
            ['nama' => 'beras', 'harga' => 15000, 'stok' => 20, 'created_at' => now() ,'updated_at' => now() ],
            ['nama' => 'minyak goreng', 'harga' => 25000, 'stok' => 10, 'created_at' => now() ,'updated_at' => now() ]
        ]);
    }
}
