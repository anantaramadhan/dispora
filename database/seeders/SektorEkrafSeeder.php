<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SektorEkrafSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $data = [
            ['nama_sektor' => 'Periklanan', 'jumlah_pelaku' => 35],
            ['nama_sektor' => 'Aplikasi dan Pengembangan Game', 'jumlah_pelaku' => 48],
            ['nama_sektor' => 'Arsitektur', 'jumlah_pelaku' => 22],
            ['nama_sektor' => 'Desain Interior', 'jumlah_pelaku' => 18],
            ['nama_sektor' => 'Desain Komunikasi Visual', 'jumlah_pelaku' => 42],
            ['nama_sektor' => 'Desain Produk', 'jumlah_pelaku' => 27],
            ['nama_sektor' => 'Fashion', 'jumlah_pelaku' => 60],
            ['nama_sektor' => 'Film, Animasi, dan Video', 'jumlah_pelaku' => 33],
            ['nama_sektor' => 'Fotografi', 'jumlah_pelaku' => 25],
            ['nama_sektor' => 'Kriya', 'jumlah_pelaku' => 75],
            ['nama_sektor' => 'Kuliner', 'jumlah_pelaku' => 90],
            ['nama_sektor' => 'Musik', 'jumlah_pelaku' => 40],
            ['nama_sektor' => 'Penerbitan', 'jumlah_pelaku' => 15],
            ['nama_sektor' => 'Pertelevisian dan Radio', 'jumlah_pelaku' => 19],
            ['nama_sektor' => 'Seni Pertunjukan', 'jumlah_pelaku' => 23],
            ['nama_sektor' => 'Seni Rupa', 'jumlah_pelaku' => 17],
            ['nama_sektor' => 'Aplikasi dan Teknologi Digital Lainnya', 'jumlah_pelaku' => 55],
        ];

        DB::table('sektor_ekraf')->insert($data);
    }
}
