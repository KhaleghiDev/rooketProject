<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use PHPUnit\Event\Facade;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

//       foreach(range(1,10) as $item){
//        DB::table('categories')->insert([
//            'title'=>"cat $item",
//            'slug'=>"cat-$item",
//            'description'=>"this is a cat $item",
//            'updated_at'=>now(),
//            'created_at'=>now(),
//        ]);


        $faker = \Faker\Factory::create('fa_IR');
        foreach(range(1,10) as $item) {
            DB::table('categories')->insert([
                'title' => $faker->text(50),
                'slug' => $faker->slug,
                'description' => $faker->paragraph(rand(8,25)),
                'meta_description'=>$faker->paragraph(1),
                'updated_at' => now(),
                'created_at' => now(),
            ]);
        }
    }
}
