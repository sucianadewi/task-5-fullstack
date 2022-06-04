<?php

namespace App\Models;

use App\Models\User;
use App\Models\Article;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'categories';
    protected $guarded = ['id'];


    public function articles() {
        return $this->belongsTo(Article::class);
    }
    public function users() {
        return $this->hasMany(User::class);
    }
}
