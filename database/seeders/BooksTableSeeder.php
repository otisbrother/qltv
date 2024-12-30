<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use Faker\Factory as Faker;

class BooksTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        
        foreach (range(1, 50) as $index) {
            Book::create([
                'title' => $faker->sentence(3),
                'author' => $faker->name,
                'isbn' => $faker->isbn13,
                'publishedyear' => $faker->year,
                'genre' => $faker->word,
            ]);
        }
    }
}
