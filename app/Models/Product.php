<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    use HasFactory;
    protected $guarded =['id','create_at','update_at'];

    //relacion uno a muchos inversa
    public function brand(){
        return $this->belongsTo(Brand::class);
    }
    public function subcategory(){
        return $this->belongsTo(subcategory::class);
    }
    //relacion muchos a muchos
    public function colors(){
        return $this->hasMany(Color::class);
    }
    public function sizes(){
        return $this->hasMany(Size::class);
    }
    public function images(){
        return $this->morphMany(Image::class,'imagiable');
    }
}
