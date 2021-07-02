<?php

namespace App\Models;

use App\Models\Lesson;
use App\Models\Comment;
use App\Models\Attachment;
use Illuminate\Database\Eloquent\Model;

class Practical extends Model
{
    protected $with = [
        'attachments'
    ];

    protected $fillable = [
        'title', 'overview', 'explaination', 'lesson_id'
    ];

    public function lesson()
    {
        return $this->belongsTo(Lesson::class, 'lesson_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'practical_id');
    }

    public function attachments()
    {
        return $this->hasMany(Attachment::class, 'practical_id');
    }
}
