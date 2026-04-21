<?php

namespace TurboSMTP\Domain\EmailValidator;

class EmailAddressValidationSubStatus
{
    const EMPTY = 1;
    const ANTISPAMSYSTEM = 2;
    const GREYLISTED = 3;
    const MAILSERVERTEMPORARYERROR = 4;
    const FORCIBLEDISCONNECT = 5;
    const MAILSERVERDIDNOTRESPOND = 6;
    const TIMEOUTEXCEEDED = 7;
    const FAILDSMTPCONNECTION = 8;
    const MAILBOXQUOTAEXCEEDED = 9;
    const EXCEPTIONOCCURRED = 10;
    const POSSIBLETRAP = 11;
    const ROLEBASED = 12;
    const GLOBALSUPPRESSION = 13;
    const MAILBOXNOTFOUND = 14;
    const NODNSENTRIES = 15;
    const FAILEDSYNTAXCHECK = 16;
    const POSSIBLETYPO = 17;
    const UNROUTABLEIPADDRESS = 18;
    const LEADINGPERIODREMOVED = 19;
    const DOESNOTACCEPTMAIL = 20;
    const ALIASADDRESS = 21;
    const ROLEBASEDCATCHALL = 22;
    const DISPOSABLE = 23;
    const TOXIC = 24;

    private $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public static function fromString(string $status): ?self
    {
        $map = [
            '' => self::EMPTY,
            'antispam_system' => self::ANTISPAMSYSTEM,
            'greylisted' => self::GREYLISTED,
            'mail_server_temporary_error' => self::MAILSERVERTEMPORARYERROR,
            'forcible_disconnect' => self::FORCIBLEDISCONNECT,
            'mail_server_did_not_respond' => self::MAILSERVERDIDNOTRESPOND,
            'timeout_exceeded' => self::TIMEOUTEXCEEDED,
            'failed_smtp_connection' => self::FAILDSMTPCONNECTION,
            'mailbox_quota_exceeded' => self::MAILBOXQUOTAEXCEEDED,
            'exception_occurred' => self::EXCEPTIONOCCURRED,
            'possible_trap' => self::POSSIBLETRAP,
            'role_based' => self::ROLEBASED,
            'global_suppression' => self::GLOBALSUPPRESSION,
            'mailbox_not_found' => self::MAILBOXNOTFOUND,
            'no_dns_entries' => self::NODNSENTRIES,
            'failed_syntax_check' => self::FAILEDSYNTAXCHECK,
            'possible_typo' => self::POSSIBLETYPO,
            'unroutable_ip_address' => self::UNROUTABLEIPADDRESS,
            'leading_period_removed' => self::LEADINGPERIODREMOVED,
            'does_not_accept_mail' => self::DOESNOTACCEPTMAIL,
            'alias_address' => self::ALIASADDRESS,
            'role_based_catch_all' => self::ROLEBASEDCATCHALL,
            'disposable' => self::DISPOSABLE,
            'toxic' => self::TOXIC,
        ];
        $lower = strtolower($status);
        if (isset($map[$lower])) {
            return new self($map[$lower]);
        }
        return null;
    }

    public static function EMPTY(): self { return new self(self::EMPTY); }
    public static function ANTISPAMSYSTEM(): self { return new self(self::ANTISPAMSYSTEM); }
    public static function GREYLISTED(): self { return new self(self::GREYLISTED); }
    public static function MAILSERVERTEMPORARYERROR(): self { return new self(self::MAILSERVERTEMPORARYERROR); }
    public static function FORCIBLEDISCONNECT(): self { return new self(self::FORCIBLEDISCONNECT); }
    public static function MAILSERVERDIDNOTRESPOND(): self { return new self(self::MAILSERVERDIDNOTRESPOND); }
    public static function TIMEOUTEXCEEDED(): self { return new self(self::TIMEOUTEXCEEDED); }
    public static function FAILDSMTPCONNECTION(): self { return new self(self::FAILDSMTPCONNECTION); }
    public static function MAILBOXQUOTAEXCEEDED(): self { return new self(self::MAILBOXQUOTAEXCEEDED); }
    public static function EXCEPTIONOCCURRED(): self { return new self(self::EXCEPTIONOCCURRED); }
    public static function POSSIBLETRAP(): self { return new self(self::POSSIBLETRAP); }
    public static function ROLEBASED(): self { return new self(self::ROLEBASED); }
    public static function GLOBALSUPPRESSION(): self { return new self(self::GLOBALSUPPRESSION); }
    public static function MAILBOXNOTFOUND(): self { return new self(self::MAILBOXNOTFOUND); }
    public static function NODNSENTRIES(): self { return new self(self::NODNSENTRIES); }
    public static function FAILEDSYNTAXCHECK(): self { return new self(self::FAILEDSYNTAXCHECK); }
    public static function POSSIBLETYPO(): self { return new self(self::POSSIBLETYPO); }
    public static function UNROUTABLEIPADDRESS(): self { return new self(self::UNROUTABLEIPADDRESS); }
    public static function LEADINGPERIODREMOVED(): self { return new self(self::LEADINGPERIODREMOVED); }
    public static function DOESNOTACCEPTMAIL(): self { return new self(self::DOESNOTACCEPTMAIL); }
    public static function ALIASADDRESS(): self { return new self(self::ALIASADDRESS); }
    public static function ROLEBASEDCATCHALL(): self { return new self(self::ROLEBASEDCATCHALL); }
    public static function DISPOSABLE(): self { return new self(self::DISPOSABLE); }
    public static function TOXIC(): self { return new self(self::TOXIC); }

    public function getValue(): int
    {
        return $this->value;
    }
}