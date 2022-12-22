<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    // One to Many Relationship for Products

    public function products(){
        return $this->hasMany(Product::class);
    }
    // Many to many relationship  for Categories 
    public function categories(){
        return $this->belongsToMany(Category::class);
    }
}
