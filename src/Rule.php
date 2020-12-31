<?php

namespace OZiTAG\Tager\Backend\Validation;

use \Illuminate\Validation\Rule as BaseRule;
use \Illuminate\Contracts\Validation\Rule as BaseRuleContract;
use OZiTAG\Tager\Backend\Validation\Contracts\IRule;

class Rule extends BaseRule implements IRule, BaseRuleContract
{
    public function passes($attribute, $value)
    {
        throw new RuntimeException(get_class($this) . ': passes method has not been set.');
    }

    public function message()
    {
        throw new RuntimeException(get_class($this) . ': message has not been set.');
    }

    public function code(): string
    {
        return strtoupper(
            substr(strrchr(get_class($this), "\\"), 1)
        );
    }
}
