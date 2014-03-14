<?php

class TFile extends Eloquent{
    protected $table = 'files';

    public function folder(){
        return $this->belongsTo('Folder', 'folder_id');
    }

    public function user(){
        return $this->belongsTo('User', 'user_id');
    }

}
?>