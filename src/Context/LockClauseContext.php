<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class LockClauseContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_lockClause;
    }

    public function FOR(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FOR, 0);
    }

    public function UPDATE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::UPDATE, 0);
    }

    public function LOCK(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LOCK, 0);
    }

    public function IN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::IN, 0);
    }

    public function SHARE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SHARE, 0);
    }

    public function MODE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MODE, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterLockClause($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitLockClause($this);
        }
    }
}

