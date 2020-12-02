<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meniu extends Model
{
    use HasFactory;

    public $fillable = ['title', 'price', 'weight', 'meat', 'about'];

    public function restaurants(){
        return $this->hasOne('App\Models\Restaurant');
    }

}
