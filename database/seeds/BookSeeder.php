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
        $authors_id = [];
        $authors = \App\Author::all();

        foreach ($authors as $author){
            $authors_id[] = $author->id;
        }

        $count = 0;
        while ($count <= 20) {
            factory(\App\Book::class)->create(
                [
                    'author_id' => $authors_id[array_rand($authors_id, 1)],
                ]
            );
            $count++;
        }

    }
}
