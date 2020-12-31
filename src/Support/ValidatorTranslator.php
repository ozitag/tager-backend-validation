<?php

namespace OZiTAG\Tager\Backend\Validation\Support;

use Illuminate\Translation\Translator;

class ValidatorTranslator extends Translator
{
    /**
     * @param string $key
     * @param array $replace
     * @param null $locale
     * @param bool $fallback
     * @return array|string|null
     */
    public function get($key, array $replace = [], $locale = null, $fallback = true)
    {
        $validationKey = preg_replace(
            '/^validation\./', 'tager-validation::messages.', $key
        );

        $line = parent::get($validationKey, $replace, $locale, $fallback);

        return $line === $validationKey
            ? parent::get($key, $replace, $locale, $fallback)
            : $line;
    }
}
