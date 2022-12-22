<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    const BORRADOR = 1;
    const PUBLICADO = 2;
    protected $guarded = ['id','created_at','updated at'];
    //Relation one to many for Sizes table
    public function sizes(){
        return $this->hasMany(Size::class);
    }
    //Relation one to many inverse for Brands table
    public function brand(){
        return $this->belongsTo(Brand::class);
    }
    public function subcategory(){
        return $this->belongsTo(Subcategory::class); 
    }
    //Relation many to many for Colors table
    public function colors(){
        return $this->belongsToMany(Color::class);
    }
    //Polymorphic one to many relationship
    public function image(){
        return $this->morphMany(Image::class,"imageable");
    }
    
}
