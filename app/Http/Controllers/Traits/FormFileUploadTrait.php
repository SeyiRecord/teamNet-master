<?php
namespace App\Http\Controllers\Traits;

use App\Attachment;
use Auth;
use Illuminate\Http\Request;

trait FormFileUploadTrait
{
    public function ResearchesUpload(Request $request)
    {
        if ($attachmentName = $request['researchpaper']) {
            $attachment = new Attachment();
            $attachment->attachmentname = $attachmentName;
            // $attachment->researchID = $id;
            $attachment->save();
        }
    }
    
}
