<?php

class UploadController extends BaseController {
    protected $layout = "main";

    public function postUploads($folderId){
        $user = Auth::user();
        $folder = Folder::find( $folderId);
        if ($user->account != $folder->user->account){
            return "Error";
        }
        
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

            //also do File database operations
            $dbfile = new TFile;
            $dbfile->user()->associate($user);
            $dbfile->folder()->associate($folder);
            //name
            //size
            $dbfile->originalname = $file->getClientOriginalName();
            $dbfile->storedname = $name;
            $dbfile->onS3 = 0;
            $dbfile->save();
        }

        // return our results in a files object
        return array(
            'files' => $results
        );
    }
}

?>