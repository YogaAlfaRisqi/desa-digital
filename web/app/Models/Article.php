<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    //
     use HasFactory,SoftDeletes;
    protected $table = 'articles';
    protected $fillable = [
        'title',
        'slug',
        'thumbnail',
        'content',
        'category_id',
        'author_id',
        'status',
        'published_at',
    ];
    protected $dates = ['published_at', 'created_at', 'updated_at', 'deleted_at'];
}
