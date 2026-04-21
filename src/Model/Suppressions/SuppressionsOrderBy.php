<?php

namespace TurboSMTP\Model\Suppressions;

class SuppressionsOrderBy
{
    const DATE = 1;
    const SOURCE = 2;
    const RECIPIENT = 3;
    const REASON = 4;

    private $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public static function DATE(): self { return new self(self::DATE); }
    public static function SOURCE(): self { return new self(self::SOURCE); }
    public static function RECIPIENT(): self { return new self(self::RECIPIENT); }
    public static function REASON(): self { return new self(self::REASON); }

    public function getValue(): int
    {
        return $this->value;
    }
}