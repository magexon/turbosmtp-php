<?php

namespace TurboSMTP\Model\Relays;

class RelayOrderByOption
{
    const SEND_TIME = 1;
    const SENDER = 2;
    const RECIPIENT = 3;
    const SUBJECT = 4;

    private $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public static function SEND_TIME(): self { return new self(self::SEND_TIME); }
    public static function SENDER(): self { return new self(self::SENDER); }
    public static function RECIPIENT(): self { return new self(self::RECIPIENT); }
    public static function SUBJECT(): self { return new self(self::SUBJECT); }

    public function getValue(): int
    {
        return $this->value;
    }
}