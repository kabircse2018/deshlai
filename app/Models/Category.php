<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_name',
        'category_slug',
        'category_meta_keyword',
        'category_meta_description',
        'category_meta_description',
        'status',
        'created_by',
        'created_at',

    ];



}

