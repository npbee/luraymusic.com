<?php namespace Services\Validators;

class AlbumValidator extends Validator {

    public static $rules = array(
        'description' => 'required'
    );

}
