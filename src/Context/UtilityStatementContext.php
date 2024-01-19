<?php

declare(strict_types=1);


namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class UtilityStatementContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_utilityStatement;
    }

    public function simpleDescribeStatement(): ?SimpleDescribeStatementContext
    {
        return $this->getTypedRuleContext(SimpleDescribeStatementContext::class, 0);
    }

    public function fullDescribeStatement(): ?FullDescribeStatementContext
    {
        return $this->getTypedRuleContext(FullDescribeStatementContext::class, 0);
    }

    public function helpStatement(): ?HelpStatementContext
    {
        return $this->getTypedRuleContext(HelpStatementContext::class, 0);
    }

    public function useStatement(): ?UseStatementContext
    {
        return $this->getTypedRuleContext(UseStatementContext::class, 0);
    }

    public function signalStatement(): ?SignalStatementContext
    {
        return $this->getTypedRuleContext(SignalStatementContext::class, 0);
    }

    public function resignalStatement(): ?ResignalStatementContext
    {
        return $this->getTypedRuleContext(ResignalStatementContext::class, 0);
    }

    public function diagnosticsStatement(): ?DiagnosticsStatementContext
    {
        return $this->getTypedRuleContext(DiagnosticsStatementContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterUtilityStatement($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitUtilityStatement($this);
        }
    }
}
