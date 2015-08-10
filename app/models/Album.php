<?php

class Album extends Eloquent {
    protected $guarded = array();
    public static $rules = array();

    public function quotes() {
        return $this->hasMany('Quote');
    }
}
