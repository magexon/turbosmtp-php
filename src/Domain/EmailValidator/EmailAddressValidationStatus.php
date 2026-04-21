<?php

namespace TurboSMTP\Domain\EmailValidator;

class EmailAddressValidationStatus
{
    const VALID = 1;
    const INVALID = 2;
    const CATCHALL = 3;
    const UNKNOWN = 4;
    const SPAMTRAP = 5;
    const ABUSE = 6;
    const DONOTMAIL = 7;

    private $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public static function fromString(string $status): ?self
    {
        $map = [
            'valid' => self::VALID,
            'invalid' => self::INVALID,
            'catch-all' => self::CATCHALL,
            'unknown' => self::UNKNOWN,
            'spamtrap' => self::SPAMTRAP,
            'abuse' => self::ABUSE,
            'do_not_mail' => self::DONOTMAIL,
        ];
        $lower = strtolower($status);
        if (isset($map[$lower])) {
            return new self($map[$lower]);
        }
        return null;
    }

    public static function VALID(): self { return new self(self::VALID); }
    public static function INVALID(): self { return new self(self::INVALID); }
    public static function CATCHALL(): self { return new self(self::CATCHALL); }
    public static function UNKNOWN(): self { return new self(self::UNKNOWN); }
    public static function SPAMTRAP(): self { return new self(self::SPAMTRAP); }
    public static function ABUSE(): self { return new self(self::ABUSE); }
    public static function DONOTMAIL(): self { return new self(self::DONOTMAIL); }

    public function getValue(): int
    {
        return $this->value;
    }
}