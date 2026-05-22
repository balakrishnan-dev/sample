<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audio extends Model
{
    use HasFactory;
    public function results(){
        return $this->morphMany(Result::class,'result');
    }
    public function tags(){
        return $this->morphToMany(Tag::class,'taggable');
    }
}
