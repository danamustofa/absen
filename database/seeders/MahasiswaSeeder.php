<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 100; $i++) {
            DB::table('mahasiswa')->insert([
                'nama' => $faker->name,
                'alamat' => $faker->address,
                'notelp' => $faker->phoneNumber,
                'ipk' => $faker->randomFloat(2,0,4),
            ]);
        }
    }
}
