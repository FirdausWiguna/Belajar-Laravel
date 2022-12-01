<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class dataguruS extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dataguru')->insert([
            'nip' => '12100456',
            'namaguru' => 'Egi Nugraha',
            'jk' => 'L',
            'mapel' => 'Pemrograman',
            'walikelas' => '11 RPL 1',
        ]);
        DB::table('dataguru')->insert([
            'nip' => '12100555',
            'namaguru' => 'Fahmi Ibrahim',
            'jk' => 'L',
            'mapel' => 'PJOK',
            'walikelas' => '11 RPL 2',
        ]);
        DB::table('dataguru')->insert([
            'nip' => '12100666',
            'namaguru' => 'Dzikri Pangestu',
            'jk' => 'L',
            'mapel' => 'PKK',
            'walikelas' => '12 RPL 1',
        ]);
    }
}
