<?php

use App\Book;
use App\Category;
use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Marketing',
            'Business',
            'Finance',
            'Entrepreneurship',
            'Science',
            'Biography',
        ]; 


        foreach ($categories as $category) {
            factory(Category::class)->create([
                'name' => $category,
            ]);
        }

        factory(Book::class, 10)->create();
    }
}
