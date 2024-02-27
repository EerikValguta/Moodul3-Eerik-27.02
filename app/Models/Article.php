<?php

namespace App\Models;

use Illuminate\Support\Str; 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['title', 'body', 'image', 'tags', 'spiciness_level', 'is_vegan', 'user_id', 'price'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getSnippetAttribute()
    {
        return Str::limit(strip_tags($this->body), 150);
    }
}
