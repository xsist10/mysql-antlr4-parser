<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class ResetStatementContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_resetStatement;
    }

    public function RESET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RESET, 0);
    }

    public function QUERY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::QUERY, 0);
    }

    public function CACHE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CACHE, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterResetStatement($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitResetStatement($this);
        }
    }
}

