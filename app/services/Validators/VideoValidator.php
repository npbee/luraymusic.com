<?php namespace Services\Validators;

class VideoValidator extends Validator {

    public static $rules = array(
        'embed_code' => 'required'
    );

}