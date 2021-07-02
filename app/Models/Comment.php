<?php

namespace App\Models;

use Carbon\Carbon;
use App\User;
use App\Models\Practical;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'parent_id', 'content', 'user_id', 'practical_id'
    ];

    protected $appends = [
        'username', 'time'
    ];

    public function getUsernameAttribute()
    {
        return $this->user->name;
    }

    public function getTimeAttribute()
    {
        return '- ' . str_replace('before', 'ago', Carbon::parse($this->created_at)->diffForHumans(Carbon::now()));
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function parent()
    {
        return $this->belongsTo(Comment::class, 'parent_id');
    }

    public function practical()
    {
        return $this->belongsTo(Practical::class, 'practical_id');
    }

    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }
}
