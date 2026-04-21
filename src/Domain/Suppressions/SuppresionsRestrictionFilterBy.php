<?php

namespace TurboSMTP\Domain\Suppressions;

class SuppresionsRestrictionFilterBy
{
    const SENDER = 1;
    const RECIPIENT = 2;
    const REASON = 3;
    const SUBJECT = 4;

    private $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public static function SENDER(): self { return new self(self::SENDER); }
    public static function RECIPIENT(): self { return new self(self::RECIPIENT); }
    public static function REASON(): self { return new self(self::REASON); }
    public static function SUBJECT(): self { return new self(self::SUBJECT); }

    public function getValue(): int
    {
        return $this->value;
    }
}