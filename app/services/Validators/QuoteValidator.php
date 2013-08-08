<?php namespace Services\Validators;

class QuoteValidator extends Validator {

    public static $rules = array(
        'quote' => 'required',
        'source' => 'required',
        'album' => 'required'
    );

}