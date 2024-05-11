<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News_paragraf extends Model
{
    use HasFactory;

    public function news()
    {
        return $this->belongsTo(News::class, "id_news");
    }
}
