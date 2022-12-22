<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'image',
        'icon',
    ];
    
    //Relation one to many for Subcategories table
    public function subcategories(){
        return $this->hasMany(Subcategory::class);
    }

    //Relation many to many for brands table
    public function brands(){
        return $this->belongsToMany(Brand::class);
    }
    //Relation many Through for Product using Subcategories table
    public function products(){
        return $this->hasManyThrough(Product::class,Subcategory::class);
    }
}
