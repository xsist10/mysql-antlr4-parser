<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class QueryExpressionNointoContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_queryExpressionNointo;
    }

    public function LR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LR_BRACKET, 0);
    }

    public function querySpecificationNointo(): ?QuerySpecificationNointoContext
    {
        return $this->getTypedRuleContext(QuerySpecificationNointoContext::class, 0);
    }

    public function RR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RR_BRACKET, 0);
    }

    public function queryExpressionNointo(): ?QueryExpressionNointoContext
    {
        return $this->getTypedRuleContext(QueryExpressionNointoContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterQueryExpressionNointo($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitQueryExpressionNointo($this);
        }
    }
}

