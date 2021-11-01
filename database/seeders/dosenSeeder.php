<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class dosenSeeder extends Seeder
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
            DB::table('dosens')->insert([
                'nama' => $faker->name,
                'nidn' => $faker->randomNumber(5, true),
                'alamat' => $faker->address,
                'kontak' => $faker->phoneNumber,
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime

            ]);
        }
    }   
}
