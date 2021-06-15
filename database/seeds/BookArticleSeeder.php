<?php

use Illuminate\Database\Seeder;

class BookArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $default_user_id = \App\User::where('firstname', 'default_user')->first()->id;
        $user_ids = \App\User::pluck('id');
        $books = \App\Book::all();
        foreach ($books as $book) {
            factory(\App\BookArticle::class, 4)->create(
                [
                    'book_id' => $book,
                    'user_id' => $default_user_id
                ]
            );
            factory(\App\BookArticle::class)->create(
                [
                    'book_id' => $book,
                    'user_id' => $user_ids->random(),
                ]
            );
        }

    }
}
