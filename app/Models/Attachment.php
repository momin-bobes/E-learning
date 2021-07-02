<?php

namespace App\Models;

use App\Models\Practical;
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    protected $fillable = [
        'path', 'type', 'practical_id', 'name'
    ];

    public function practical()
    {
        return $this->belongsTo(Practical::class, 'practical_id');
    }

    public function getUrlAttribute()
    {
        return asset(str_replace("public", "storage", $this->path));
    }

    public function deleteWithFile()
    {
        $path = str_replace("public", "storage", $this->path);
        if(file_exists($path)) unlink($path);
        $this->delete();
    }

    public static $types = [
        'session_video',
        'session_featured_image',
        'session_attached_file'
    ];
}
