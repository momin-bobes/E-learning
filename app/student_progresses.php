<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class student_progresses extends Model
{
    use Notifiable;

    protected $fillable = [
        'name', 'seven_p','eighth_p','ninth_p'
    ];
}
