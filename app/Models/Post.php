<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, Sluggable, SoftDeletes;

    protected $fillable = [
        'author_id',
        'title',
        'header_image',
        'content',
        'is_public',
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d, H:i:s',
        'updated_at' => 'datetime:Y-m-d, H:i:s',
    ];

    public function sluggable()
    {
        return [
          'slug' => [
            'source' => 'title'
          ]  
        ];
    }

    public function author()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class)->orderBy('id', 'desc');
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
