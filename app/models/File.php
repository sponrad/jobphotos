<?php

class File extends Eloquent{
    protected $table = 'files';

    public function folder(){
        return $this->belongsTo('Folder', 'folder_id');
    }

}
?>