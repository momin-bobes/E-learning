<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class lessons extends Model
{
    use Notifiable;

    protected $fillable = [
        'user_id', 'title'
    ];
    public function post()
    {
        return $this->belongsTo(User::class);
    }
}
