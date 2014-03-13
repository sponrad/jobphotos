<?php

class UploadController extends BaseController {
    protected $layout = "main";

    public function postUploads(){
        // Grab our files input
        $files = Input::file('files');
        // We will store our uploads in public/uploads/basic
        $assetPath = '/uploads';
        $uploadPath = public_path($assetPath);
        // We need an empty arry for us to put the files back into
        $results = array();

        foreach ($files as $file) {
            // store our uploaded file in our uploads folder
            $file->move($uploadPath, $file->getClientOriginalName());
            // set our results to have our asset path
            $name = $assetPath . '/' . $file->getClientOriginalName();
            $results[] = compact('name');
        }

        // return our results in a files object
        return array(
            'files' => $results
        );
    }
}

?>