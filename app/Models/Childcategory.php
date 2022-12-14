<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Childcategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'childcategory_name',
        'childcategory_slug',
        'childcategory_meta_keyword',
        'childcategory_meta_description',
        'childcategory_meta_description',
        'status',
        'created_by',

    ];



}
