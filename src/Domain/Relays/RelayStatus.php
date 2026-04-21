<?php

namespace TurboSMTP\Domain\Relays;

class RelayStatus
{
    const NEW = 1;
    const DEFER = 2;
    const SUCCESS = 3;
    const OPEN = 4;
    const CLICK = 5;
    const REPORT = 6;
    const FAIL = 7;
    const SYSFAIL = 8;
    const UNSUB = 9;

    private $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public static function fromString(string $status): ?self
    {
        $map = [
            'new' => self::NEW,
            'defer' => self::DEFER,
            'success' => self::SUCCESS,
            'open' => self::OPEN,
            'click' => self::CLICK,
            'report' => self::REPORT,
            'fail' => self::FAIL,
            'sysfail' => self::SYSFAIL,
            'unsub' => self::UNSUB,
        ];
        $lower = strtolower($status);
        if (isset($map[$lower])) {
            return new self($map[$lower]);
        }
        return null;
    }

    public static function NEW(): self { return new self(self::NEW); }
    public static function DEFER(): self { return new self(self::DEFER); }
    public static function SUCCESS(): self { return new self(self::SUCCESS); }
    public static function OPEN(): self { return new self(self::OPEN); }
    public static function CLICK(): self { return new self(self::CLICK); }
    public static function REPORT(): self { return new self(self::REPORT); }
    public static function FAIL(): self { return new self(self::FAIL); }
    public static function SYSFAIL(): self { return new self(self::SYSFAIL); }
    public static function UNSUB(): self { return new self(self::UNSUB); }

    public function getValue(): int
    {
        return $this->value;
    }

    public function name(): string
    {
        $consts = [
            self::NEW => 'NEW',
            self::DEFER => 'DEFER',
            self::SUCCESS => 'SUCCESS',
            self::OPEN => 'OPEN',
            self::CLICK => 'CLICK',
            self::REPORT => 'REPORT',
            self::FAIL => 'FAIL',
            self::SYSFAIL => 'SYSFAIL',
            self::UNSUB => 'UNSUB',
        ];
        return $consts[$this->value] ?? '';
    }
}