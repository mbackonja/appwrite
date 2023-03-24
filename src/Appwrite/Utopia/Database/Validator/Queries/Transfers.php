<?php

namespace Appwrite\Utopia\Database\Validator\Queries;

class Transfers extends Base
{
    public const ALLOWED_ATTRIBUTES = [
        'status',
        'stage',
        'source',
        'destination',
        'resources',
        'totalProgress',
        'latestProgress',
        'errorData'
    ];

    /**
     * Expression constructor
     *
     */
    public function __construct()
    {
        parent::__construct('transfers', self::ALLOWED_ATTRIBUTES);
    }
}