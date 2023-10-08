<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subcategory extends Model
{
    use HasFactory;
    protected $guarded =['id','create_at','update_at'];

    //relacion uno a muchos
    public function products(){
        return $this->hasMany(Product::class);
    }
    //relacion uno a muchos inverso
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
