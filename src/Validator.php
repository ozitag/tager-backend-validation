<?php

namespace OZiTAG\Tager\Backend\Validation;

use Illuminate\Contracts\Translation\Translator;
use Illuminate\Support\Str;
use Illuminate\Validation\Validator as BaseValidator;
use OZiTAG\Tager\Backend\Validation\Facades\Validation;
use OZiTAG\Tager\Backend\Validation\Support\MessageBag;
use OZiTAG\Tager\Backend\Validation\Support\ValidatorTranslator;

class Validator extends BaseValidator
{

    public function __construct(Translator $translator, array $data, array $rules, array $messages = [], array $customAttributes = [])
    {
        parent::__construct($translator, $data, $rules, $messages, $customAttributes);
        $this->translator = new ValidatorTranslator(app('translation.loader'), app('config')['app.locale']);
    }

    /**
     * Add a failed rule and error message to the collection.
     *
     * @param  string  $attribute
     * @param  string  $rule
     * @param  array  $parameters
     * @return void
     */
    public function addFailure($attribute, $rule, $parameters = [])
    {
        if (! $this->messages) {
            $this->passes();
        }

        $attribute = str_replace(
            [$this->dotPlaceholder, '__asterisk__'],
            ['.', '*'],
            $attribute
        );

        if (in_array($rule, $this->excludeRules)) {
            return $this->excludeAttribute($attribute);
        }

        $isSizeRule = in_array($rule, $this->sizeRules);
        $type = $isSizeRule ? $this->getAttributeType($attribute) : null;
        $message = $this->makeReplacements(
            $this->getMessage($attribute, $rule), $attribute, $rule, $parameters
        );

        $this->messages->add($attribute, Validation::getFormattedMessage(
            $attribute, Validation::getCode(Str::lower($rule), $type), $message
        ));

        $this->failedRules[$attribute][$rule] = $parameters;
    }


    /**
     * Validate an attribute using a custom rule object.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @param  \Illuminate\Contracts\Validation\Rule  $rule
     * @return void
     */
    protected function validateUsingCustomRule($attribute, $value, $rule)
    {
        $attribute = $this->replacePlaceholderInString($attribute);

        $value = is_array($value) ? $this->replacePlaceholders($value) : $value;

        if (! $rule->passes($attribute, $value)) {
            $this->failedRules[$attribute][get_class($rule)] = [];

            $messages = $rule->message();

            $messages = $messages ? (array) $messages : [get_class($rule)];

            foreach ($messages as $message) {
                $this->messages->add($attribute, Validation::getFormattedMessage(
                    $attribute, Validation::getCode($rule), $this->makeReplacements(
                        $message, $attribute, get_class($rule), []
                    )
                ));
            }
        }
    }

}
