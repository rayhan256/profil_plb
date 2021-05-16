<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $table = 'articles';
    protected $fillable = ['title', 'date', 'desc', 'author', 'link', 'registration', 'benefit', 'time', 'places', 'price', 'other_info'];
}
