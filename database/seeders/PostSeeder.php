<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use Faker\Factory as Faker;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 20; $i++){

            $countParagraph = $faker->numberBetween(1, 10);

            if($countParagraph >= 7){
                $id = 3;
            } elseif($countParagraph >= 4){
                $id = 2;
            } else{
                $d = 1;
            }

            Post::create([
                'title' => $faker->sentence(),
                'description' => $faker->paragraph(),
                'author' => $faker->name(),
                'date' => $faker->date(),
                'category_id' => $id,
                'body' => $this->breakParagraphToHTML($faker->paragraphs($countParagraph)),
                'image' => $faker->imageUrl(600, 400,null ,true),
                'ratingcount' => $faker->numberBetween(1,200),
                'created_at' => $faker->date().' '.$faker->time(),
            ]);
        }
    }

    private function breakParagraphToHTML($listParagraph){
        $result = '';

        foreach($listParagraph as $paragraph){
            $result .= '<p class="mb-3">' . $paragraph .'</p>';
        }
        return $result;
    }
}
