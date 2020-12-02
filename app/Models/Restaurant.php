<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;
    public $fillable = ['title', 'customers', 'employees', 'meniu_id' ];

    public function meniu(){
        return $this->belongsTo('App\Models\Meniu');
    }

}
