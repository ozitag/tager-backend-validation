<?php

namespace OZiTAG\Tager\Backend\Validation\Exceptions;

use Illuminate\Validation\ValidationException as BaseValidationException;
use OZiTAG\Tager\Backend\Validation\Facades\Validation;

class ValidationException extends BaseValidationException
{
    public $status = 400;

    public function __construct($validator = null, $response = null, $errorBag = 'default')
    {
        parent::__construct($validator, $response, $errorBag);
    }

    /**
     * Get all of the validation error messages.
     *
     * @return array
     */
    public function errors()
    {
        $messages = $this->validator->errors()->messages();

        if (!Validation::isMultiErrorsSupport()) {
            foreach ($messages as $attribute => $errors) {
                $messages[$attribute] = is_array($errors) ? array_shift($errors) : null;
            }
        }

        return $messages;
    }
}
