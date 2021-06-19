<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Classes_content extends Model
{
    use Notifiable;

    protected $fillable = [
        'classname', 'classnum','classtitle','classsubtitle','titles','obj','images','video','paper','conclude','session','learn','exam'
    ];
}
