<?php
namespace OZiTAG\Tager\Backend\Validation\Contracts;

interface IRule
{
    /**
     * @param string $attribute
     * @param mixed $value
     * @return bool
     */
    public function passes($attribute, $value);

    /**
     * @return string
     */
    public function message();

    /**
     * @return string
     */
    public function code(): string;
}
