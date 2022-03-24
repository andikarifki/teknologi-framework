<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BukuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('buku')->insert([
            ['penerbit'=>'Graha Ilmu','alamat' =>'Ruko Jambusari No.7A, Wedomartani','telepon' =>'027488262', 'e_mail'=>'pesanan@grahailmu.co.id'],
            ['penerbit'=>'Jaya Press','alamat' =>'Jl. Wonosari','telepon' =>'2113', 'e_mail'=>'wijaya@gmail.com'],
            ['penerbit'=>'Mediakom','alamat' =>'Deresan CT X Yogyakarta','telepon' =>'21212', 'e_mail'=>'penerbitmediakom@g']
            ]);
    }
}
