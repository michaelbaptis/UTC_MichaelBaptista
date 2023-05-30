<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

class Post extends Model
{
    use HasFactory;
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
