<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;
    protected $guarded =['id','create_at','update_at'];
    public function products(){
        return $this->belongsToMany(Product::class);
    }
    public function size(){
        return $this->belongsToMany(Size::class);
    }
    
}
