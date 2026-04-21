<?php

namespace TurboSMTP\Model\Relays;

class RelayFilterCriteria
{
    const SUBJECT = 1;
    const SENDER = 2;
    const RECIPIENT = 3;
    const DOMAIN = 4;

    private $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public static function SUBJECT(): self { return new self(self::SUBJECT); }
    public static function SENDER(): self { return new self(self::SENDER); }
    public static function RECIPIENT(): self { return new self(self::RECIPIENT); }
    public static function DOMAIN(): self { return new self(self::DOMAIN); }

    public function getValue(): int
    {
        return $this->value;
    }
}