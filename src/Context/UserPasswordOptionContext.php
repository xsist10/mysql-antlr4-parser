<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class UserPasswordOptionContext extends ParserRuleContext
{
    /**
     * @var Token|null $expireType
     */
    public $expireType;

    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_userPasswordOption;
    }

    public function PASSWORD(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PASSWORD, 0);
    }

    public function EXPIRE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::EXPIRE, 0);
    }

    public function decimalLiteral(): ?DecimalLiteralContext
    {
        return $this->getTypedRuleContext(DecimalLiteralContext::class, 0);
    }

    public function DAY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DAY, 0);
    }

    public function DEFAULT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DEFAULT, 0);
    }

    public function NEVER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::NEVER, 0);
    }

    public function INTERVAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INTERVAL, 0);
    }

    public function HISTORY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::HISTORY, 0);
    }

    public function REUSE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::REUSE, 0);
    }

    public function REQUIRE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::REQUIRE, 0);
    }

    public function CURRENT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CURRENT, 0);
    }

    public function OPTIONAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::OPTIONAL, 0);
    }

    public function FAILED_LOGIN_ATTEMPTS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FAILED_LOGIN_ATTEMPTS, 0);
    }

    public function PASSWORD_LOCK_TIME(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PASSWORD_LOCK_TIME, 0);
    }

    public function UNBOUNDED(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::UNBOUNDED, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterUserPasswordOption($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitUserPasswordOption($this);
        }
    }
}

