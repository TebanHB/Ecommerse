<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name','slug','image','icon'];
    //relacion uno a muchos
    public function subcategories(){
        return $this->hasMany(subcategory::class);
    }
    //relacion muchos a muchos
    public function brands(){
        return $this->belongsToMany(Brand::class);
    }
    //
    public function products(){
        return $this->hasManyThrough(Product::class,subcategory::class);
    }
}
