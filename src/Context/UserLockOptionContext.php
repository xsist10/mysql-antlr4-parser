<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class UserLockOptionContext extends ParserRuleContext
{
    /**
     * @var Token|null $lockType
     */
    public $lockType;

    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_userLockOption;
    }

    public function ACCOUNT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ACCOUNT, 0);
    }

    public function LOCK(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LOCK, 0);
    }

    public function UNLOCK(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::UNLOCK, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterUserLockOption($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitUserLockOption($this);
        }
    }
}

