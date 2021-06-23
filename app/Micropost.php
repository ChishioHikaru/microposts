<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Micropost extends Model
{
    protected $fillable = ['content'];

    /**
     * この投稿を所有するユーザ。（ Userモデルとの関係を定義）
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    
    
    public function favorites_users()
    {
        return $this->belongsToMany(User::class, 'user_favorites', 'micropost_id', 'user_id')->loadCount('favorites');
    }
    
    
    // public function unfavorite($userId)
    // {
    //     $exist = $this->is_unfavorites($userId);
        
    //     $its_me = $this->id == $userId;

    //     if ($exist && $its_me) {
    //         return true;
    //     } else {
    //         $this->unfavorites()->detach($userId);
    //         return fales;
    //     }
    // }
    
    public function is_unfavorites($userId)
    {
        return $this->unvavorites()->where('user_id', $userId)->exists();
    }
    
    
    
}
