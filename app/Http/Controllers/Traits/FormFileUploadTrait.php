<?php
namespace App\Http\Controllers\Traits;

use App\Attachment;
use Auth;
use Illuminate\Http\Request;

trait FormFileUploadTrait
{
    public function ResearchesUpload(Request $request, $id)
    {
        if ($name = $request['researchpaper']) {
            $attachment = new Attachment();
            $attachment->name = $name;
            $attachment->research_id = $id;
            $attachment->save();
        }
    }
    
}
