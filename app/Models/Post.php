<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    use HasFactory;

  protected $guarded = [];

    public function category()
    {
      return $this->belongsTo(Category::class);
    }
    public function user(){
      return $this->belongsTo(User::class, 'author_id');
    }
    public function comments()
    {
      return $this->hasMany(Comment::class);
    }
    public function scopeFilter($query, array $filters)
    {
      if($filters['search'] ?? false){
        $query->where('title', 'like', '%'.request('search').'%')
        ->orWhere('body', 'like', '%'. request('search').'%');
      }
    }
}
