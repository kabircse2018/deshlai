<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'subcategory_name',
        'subcategory_slug',
        'subcategory_meta_keyword',
        'subcategory_meta_description',
        'subcategory_meta_description',
        'status',
        'created_by',

    ];



}
