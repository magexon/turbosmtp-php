<?php

namespace TurboSMTP\Model\Suppressions;

class SuppressionsRestrictionOperator
{
    const INCLUDE = 1;
    const EXCLUDE = 2;

    private $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public static function INCLUDE(): self { return new self(self::INCLUDE); }
    public static function EXCLUDE(): self { return new self(self::EXCLUDE); }

    public function getValue(): int
    {
        return $this->value;
    }
}