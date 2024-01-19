<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class DoStatementContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_doStatement;
    }

    public function DO(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DO, 0);
    }

    public function expressions(): ?ExpressionsContext
    {
        return $this->getTypedRuleContext(ExpressionsContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterDoStatement($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitDoStatement($this);
        }
    }
}

