<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class UnlockTablesContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_unlockTables;
    }

    public function UNLOCK(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::UNLOCK, 0);
    }

    public function TABLES(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TABLES, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterUnlockTables($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitUnlockTables($this);
        }
    }
}

