<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Traits\UploadImageTrait;
use Illuminate\Http\Request;

class UploadFilesController extends Controller
{
    use UploadImageTrait;

    public function uploadImage(Request $request)
    {
        $result = $this->uploadImages($request);

        return $result;
    }

    public function deleteImage(Request $request)
    {
        $result = $this->deleteImageTrait($request);

        return $result;
    }

    public function clearChache()
    {
        $result = $this->clearChacheTrait();

        return $result;
    }

    public function getImage($d, $i, $original = null, $type = null)
    {
        $result = $this->getImageTrait($d, $i, $original = null, $type = null);

        return $result;
    }
}
