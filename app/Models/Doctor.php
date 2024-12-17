<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $table = 'doctors';
    protected $guarded = ['id'];

    public function articles(){
        return $this->hasMany(Article::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
