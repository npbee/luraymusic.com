<?php namespace Services\Validators;

class ImageValidator extends Validator {

    public static $rules = array(
        'image' => 'required'
    );

}