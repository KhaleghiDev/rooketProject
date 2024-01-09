<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create('fa_IR');
        foreach(range(1,rand(1400,10000)) as $item) {
            DB::table('users')->insert([
                'username' => $faker->text(75),
                'email' => $faker->unique()->email(),
                'phone' => $faker->unique()->phoneNumber(),
                'gender'=>$faker->title($gender = "none"|'male'|'female') ,
                'firstname'=>$faker->firstNameMale ,
                'lastname'=>$faker->lastName() ,
                'password'=>$faker->password,
                'status'=>rand(0,1),
                'codeAut2'=>rand(11111,999999),
                'updated_at' => now(),
                'created_at' => now(),
            ]);
        }
    }
}
