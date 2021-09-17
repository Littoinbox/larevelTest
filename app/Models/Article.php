<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'body', 'photo', 'slug'];
    protected $guarded = [];

    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function state(){
        return $this->hasOne(State::class);
    }
    public function tag(){
    return $this->belongsToMany(Tag::class);
    }
}
