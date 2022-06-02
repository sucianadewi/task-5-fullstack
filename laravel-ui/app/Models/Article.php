<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $guarded = ['id'];

    public function categories() {
        return $this->hasMany(Category::class);
    }

    public function users() {
        return $this->hasMany(User::class);
    }
}
