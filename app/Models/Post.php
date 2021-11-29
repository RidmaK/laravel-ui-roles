<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'user_id',
    ];

    public function comments() {
        return $this->hasMany(Comment::class,'post_id');
    }

    public function getCommentCount(){
        // $commentCount = BlogPostCommet::where('post_id',$this->post_id)->count();
        // return $commentCount;
        return $this->comments()->count();
    }

}
