<?php

namespace TurboSMTP\Model\Shared;

class OrderType
{
    const ASC = 1;
    const DESC = 2;

    private $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public static function ASC(): self { return new self(self::ASC); }
    public static function DESC(): self { return new self(self::DESC); }

    public function getValue(): int
    {
        return $this->value;
    }
}