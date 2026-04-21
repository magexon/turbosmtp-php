<?php

namespace TurboSMTP\Domain\Suppressions;

class SuppressionSource
{
    const MANUAL = 1;
    const BOUNCE = 2;
    const SPAM = 3;
    const UNSUBSCRIBE = 4;
    const VALIDATIONFAILED = 5;

    private $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public static function fromString(string $source): ?self
    {
        $map = [
            'manual' => self::MANUAL,
            'bounce' => self::BOUNCE,
            'spam' => self::SPAM,
            'unsubscribe' => self::UNSUBSCRIBE,
            'validation_failed' => self::VALIDATIONFAILED,
        ];
        $lower = strtolower($source);
        if (isset($map[$lower])) {
            return new self($map[$lower]);
        }
        return null;
    }

    public static function MANUAL(): self { return new self(self::MANUAL); }
    public static function BOUNCE(): self { return new self(self::BOUNCE); }
    public static function SPAM(): self { return new self(self::SPAM); }
    public static function UNSUBSCRIBE(): self { return new self(self::UNSUBSCRIBE); }
    public static function VALIDATIONFAILED(): self { return new self(self::VALIDATIONFAILED); }

    public function getValue(): int
    {
        return $this->value;
    }
}