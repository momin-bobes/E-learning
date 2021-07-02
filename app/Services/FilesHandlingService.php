<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use App\Models\Practical;
use App\Models\Attachment;

class FilesHandlingService
{
    protected $practical;

    public function setPractical(Practical $practical) {
        $this->practical = $practical;
    }

    public function storeFile(UploadedFile $file, $name = null) {
        return is_null($file) ? false :
        Attachment::create([
            'practical_id' => $this->practical->id,
            'type' => $this->fileType($file),
            'path' => $file->store('public/uploads/attachements'),
            'name' => $name
        ]);
    }

    protected function fileType(UploadedFile $file) {
        if(substr($file->getMimeType(), 0, 5) == 'image') {
            return 'image';
        } elseif (substr($file->getMimeType(), 0, 5) == 'video') {
            return 'video';
        } else {
            return 'pdf';
        }
    }

}
