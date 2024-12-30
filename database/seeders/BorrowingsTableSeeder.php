<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Borrowing;
use App\Models\Book;
use Faker\Factory as Faker;

class BorrowingsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        
        foreach (range(1, 50) as $index) {
            Borrowing::create([
                'bookid' => Book::inRandomOrder()->first()->bookid, // Chọn ngẫu nhiên một cuốn sách
                'memberid' => $faker->randomNumber(3), // Giả định memberid là một số ngẫu nhiên
                'borrowingsdate' => $faker->date(),
                'duedate' => $faker->dateTimeBetween('now', '+1 month'),
                'returnedDate' => $faker->optional()->date(), // Có thể không có ngày trả
            ]);
        }
    }
}
