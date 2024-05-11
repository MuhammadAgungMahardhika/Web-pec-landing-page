<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    public function news_paragrafs()
    {
        return $this->hasMany(News_paragraf::class, 'id_news');
    }
}
