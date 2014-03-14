<?php

class Folder extends Eloquent{
    protected $table = 'folders';

    public function files(){
        return $this->hasMany('TFile', 'folder_id');
    }

    public function user(){
        return $this->belongsTo('User', 'user_id');
    }
}
?>