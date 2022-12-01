<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class produksmkS extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produksmk')->insert([
            'namaproduk' => 'Motor Listrik',
            'jurusan' => 'TBSM',
            ]);
        DB::table('produksmk')->insert([
            'namaproduk' => 'Siborin',
            'jurusan' => 'RPL',
            ]);
        DB::table('produksmk')->insert([
            'namaproduk' => 'Pembakar Sampah',
            'jurusan' => 'TPM',
            ]);
    }
}
