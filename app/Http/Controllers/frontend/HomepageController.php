<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function show()
    {
       /*$authors_id = [];
        $authors = \App\Author::all();

        $books = \App\Book::pluck('id');

        dd($books->random());


        foreach ($authors as $author){
            $authors_id[] = $author->id;
        }

        echo $authors_id[array_rand($authors_id, 1)];
        echo '</br>';
        print_r($authors_id);*/

        return view('welcome');
    }
}
