<?php

namespace App\Models;

use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Childcategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'subcategory_id',
        'childcategory_name',
        'childcategory_slug',
        'status',
        'created_by',


    ];


    public function category()
    {
        return $this->belongs(Category::class, 'category_id');
    }

    public function subcategory()
    {
        return $this->belongs(Subcategory::class, 'subcategory_id');
    }










}
