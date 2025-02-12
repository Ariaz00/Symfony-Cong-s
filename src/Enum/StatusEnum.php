<?php

namespace App\Enum;

class StatusEnum
{
    const DRAFT = 'DRAFT';
    const SUBMITTED = 'SUBMITTED';
    const APPROVED = 'APPROVED';
    const REJECTED = 'REJECTED';

    public static function getValues(): array
    {
        return [
            self::DRAFT,
            self::SUBMITTED,
            self::APPROVED,
            self::REJECTED,
        ];
    }
}