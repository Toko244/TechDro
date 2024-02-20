<?php
namespace App\Traits;

use App\Models\PostFile;
use Illuminate\Support\Facades\Request;

trait FileUploadTrait
{
    public function uploadImage($values)
    {
        if (isset($values['image']) && $values['image'] != '') {
            $newimageName = uniqid() . "." . $values['image']->getClientOriginalExtension();
            $values['image']->move(config('config.file_path'), $newimageName);
            $values['image'] = '';
            $values['image'] = $newimageName;

            return $values['image'];
        }
    }

    public function uploadFiles($values, $post)
    {
        if (isset($values['files']) && count($values['files']) > 0) {
            foreach ($values['files'] as $key => $files) {
                foreach ($files['file'] as $k => $file) {
                    $postFile = new PostFile;
                    $postFile->type = $key;
                    $postFile->file = $file;
                    $postFile->title = $values['files'][$key]['desc'][$k];
                    $postFile->post_id = $post->id;
                    $postFile->save();
                }

            }

            return $values['files'];

        }
    }
}
