<?php namespace Services\Validators;

class TourdateValidator extends Validator {

    public static $rules = array(
        'date' => 'required',
        'location' => 'required',
        'venue' =>' required'
    );

}