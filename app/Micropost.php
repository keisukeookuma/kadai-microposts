<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Micropost extends Model
{
    protected $fillable =['content', 'user_id'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    //該当の投稿をお気に入りにしているユーザーの表示
    public function favoriteUsers()
    {
        return $this->belongsToMany(User::class, 'user_favorite', 'micropost_id', 'user_id')-withTimestamps();
    }
    
/*    public function favorites_users()
    {
        return $this->belongsToMany(User::class, 'user_favorites', 'micropost_id', 'user_id')-withTimestamps();
    }*/
}
