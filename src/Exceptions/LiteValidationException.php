<?php

namespace OZiTAG\Tager\Backend\Validation\Exceptions;

use JetBrains\PhpStorm\Pure;
use OZiTAG\Tager\Backend\Validation\Facades\Validation;

class LiteValidationException extends \Exception
{
    #[Pure]
    public function __construct(
        protected $fieldMessage,
        protected $attribute,
        protected ?string $rule = null,
        protected $code = 400,
    ) {
        parent::__construct('The given data was invalid.');
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function getResponse()
    {
        $errors = Validation::getFormattedMessage(
            $this->attribute, Validation::getCode($this->rule), $this->fieldMessage,
        );
        $format = Validation::isMultiErrorsSupport() ? [$errors] : $errors;
        return response()->json([
            'message' => $this->message,
            'errors' => [
                $this->attribute => $format
            ],
        ], $this->code);
    }
}
