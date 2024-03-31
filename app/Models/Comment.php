<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'author_id',
        'post_id',
        'message',
    ];
    
    protected $casts = [
        'created_at' => 'datetime:Y-m-d, H:i:s',
        'updated_at' => 'datetime:Y-m-d, H:i:s',
    ];

    public function author()
    {
        return $this->belongsTo(User::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
