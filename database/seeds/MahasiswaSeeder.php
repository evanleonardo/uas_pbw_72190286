<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MahasiswaSeeder extends Seeder
{
    public function run()    {
        $faker = Faker::create('id_ID');

        for($i=1; $i<=100; $i++){
            DB::table('mahasiswa286')->insert([
                'Nim' => $faker->numberBetween(72200401, 72200505),
                'Nama' => $faker->name(),
                'Gender' => $faker -> randomElement(['Pria', 'Wanita']),
                'Jurusan' => 'Fakultas Teknologi Informasi',
                'Bidang_Minat' => $faker-> randomElement(['Sistem Informasi', 'Informatika']),
            ]);
        }
    }
}