<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class mahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i=1 ; $i<=5; $i++){
            DB::table('mahasiswas')->insert([
                'nama' => $faker->name,
                'nim' => $faker->randomNumber(5, true),
                'tanggal_lahir' => $faker->dateTime,
                'alamat' => $faker->address,
                'tahun_masuk' => $faker->year,
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime

            ]);
        }
    }
}
