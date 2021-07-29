<?php

use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $author_ids = \App\Author::pluck('id');
        $category_ids = \App\Category::pluck('id');

        $count = 0;
        while ($count <= 20) {
            factory(\App\Book::class)->create(
                [
                    'author_id' => $author_ids->random(),
                    'category_id' => $category_ids->random(),
                ]
            );
            $count++;
        }

    }
}
