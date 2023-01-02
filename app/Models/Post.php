<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'subcategory_id',
        'childcategory_id',
        'post_title','post_slug',
        'post_description',
        'post_date',
        'author_id',
        'post_month',
        'tag_id',
        'headline',
        'first_section',
        'first_section_thumbnail',
        'bigthumbnail',
        'image',
        'image_thumbnails',
    ];



}
