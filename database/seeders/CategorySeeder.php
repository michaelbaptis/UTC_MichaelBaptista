<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        Category::create([
            'name' => 'Quicks Reads',]);
        Category::create([
            'name' => 'Medium Reads',]);
        Category::create([
            'name' => 'Long Reads',]);
    }
}
