<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    protected $guarded= [
        'id',
        'created_at',
        'updated_at'
    ];
    
    //Relation one to many for Products table
    public function products(){
        return $this->hasMany(Products::class);
    }

    //Relation one to many for Categories table
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
