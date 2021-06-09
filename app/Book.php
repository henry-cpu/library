<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function bookArticles()
    {
        return $this->hasMany(BookArticle::class);
    }

}
