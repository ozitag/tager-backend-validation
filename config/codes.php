<?php
return [
    'info'                 => 'INFO',
    'accepted'             => 'ACCEPTED',
    'active_url'           => 'ACTIVE_URL',
    'after'                => 'AFTER',
    'after_or_equal'       => 'AFTER_OR_EQUAL',
    'alpha'                => 'ALPHA',
    'alpha_dash'           => 'ALPHA_DASH',
    'alpha_num'            => 'ALPHA_NUM',
    'array'                => 'ARRAY',
    'before'               => 'BEFORE',
    'before_or_equal'      => 'BEFORE_OR_EQUAL',
    'between'              => [
        'numeric' => 'BETWEEN_NUMERIC',
        'file'    => 'BETWEEN_FILE',
        'string'  => 'BETWEEN_STRING',
        'array'   => 'BETWEEN_ARRAY',
    ],
    'boolean'              => 'BOOLEAN',
    'confirmed'            => 'CONFIRMED',
    'date'                 => 'DATE',
    'date_equals'          => 'DATE_EQUELS',
    'date_format'          => 'INVALID_DATE_FORMAT',
    'different'            => 'DIFFERENT',
    'digits'               => 'DIGITS',
    'digits_between'       => 'DIGITS_BETWEEN',
    'dimensions'           => 'DIMENSIONS',
    'distinct'             => 'DISTINCT',
    'email'                => 'EMAIL_FORMAT',
    'ends_with'            => 'ENDS_WITH',
    'exists'               => 'EXISTS',
    'file'                 => 'INVVALID_FILE',
    'filled'               => 'FILLED',
    'gt'                   => [
        'numeric' => 'GT_NUMERIC',
        'file'    => 'GT_FILE',
        'string'  => 'GT_STRING',
        'array'   => 'GT_ARRAY',
    ],
    'gte'                  => [
        'numeric' => 'GTE_NUMERIC',
        'file'    => 'GTE_FILE',
        'string'  => 'GTE_STRING',
        'array'   => 'GTTE_ARRAY',
    ],
    'image'                => 'INVALID_IMAGE',
    'in'                   => 'NOT_IN',
    'in_array'             => 'NOT_IN_ARRAY',
    'integer'              => 'INTEGER',
    'ip'                   => 'IP',
    'ipv4'                 => 'IP_V4',
    'ipv6'                 => 'IP_V6',
    'json'                 => 'INVALID_JSON',
    'lt'                   => [
        'numeric' => 'LT_NUMERIC',
        'file'    => 'LT_FILE',
        'string'  => 'LT_STRING',
        'array'   => 'LT_ARRAY',
    ],
    'lte'                  => [
        'numeric' => 'LTE_NUMERIC',
        'file'    => 'LTE_FILE',
        'string'  => 'LTE_STRING',
        'array'   => 'LTE_ARRAY',
    ],
    'max'                  => [
        'numeric' => 'MAX_NUMERIC',
        'file'    => 'MAX_FILE_SIZE',
        'string'  => 'MAX_STRTING_LENGTH',
        'array'   => 'MAX_ARRAY_LENGTH',
    ],
    'mimes'                => 'INVALID_MIME',
    'mimetypes'            => 'INVALID_MIME_TYPE',
    'min' => [
        'numeric' => 'MIN_NUMERIC',
        'file'    => 'MIN_FILE_SIZE',
        'string'  => 'MIN_STRTING_LENGTH',
        'array'   => 'MIN_ARRAY_LENGTH',
    ],
    'multiple_of'          => 'MULTPLE_OF',
    'not_in'               => 'NOT_IN',
    'not_regex'            => 'NOT_IN_REGEX',
    'numeric'              => 'NUMERIC',
    'password'             => 'PASSWORD',
    'present'              => 'PRESENT',
    'regex'                => 'REGEX_FAILED',
    'required'             => 'FIELD_REQUIRED',
    'required_if'          => 'FIELD_REQUIRED',
    'required_unless'      => 'FIELD_REQUIRED',
    'required_with'        => 'FIELD_REQUIRED',
    'required_with_all'    => 'FIELD_REQUIRED',
    'required_without'     => 'FIELD_REQUIRED',
    'required_without_all' => 'FIELD_REQUIRED',
    'same'                 => 'NOT_SAME',
    'size'                 => [
        'numeric' => 'NUMERIC_SIZE',
        'file'    => 'FILE_SIZE',
        'string'  => 'STRING_SIZE',
        'array'   => 'ARRAY_SIZE',
    ],
    'starts_with'          => 'STARTS_WITH',
    'string'               => 'STRING',
    'timezone'             => 'TIMEZONE',
    'unique'               => 'UNIQUE',
    'uploaded'             => 'UPLOADED',
    'url'                  => 'URL',
    'uuid'                 => 'UUID',
];