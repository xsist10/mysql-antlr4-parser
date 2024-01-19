<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class UnionStatementContext extends ParserRuleContext
{
    /**
     * @var Token|null $unionType
     */
    public $unionType;

    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_unionStatement;
    }

    public function UNION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::UNION, 0);
    }

    public function querySpecificationNointo(): ?QuerySpecificationNointoContext
    {
        return $this->getTypedRuleContext(QuerySpecificationNointoContext::class, 0);
    }

    public function queryExpressionNointo(): ?QueryExpressionNointoContext
    {
        return $this->getTypedRuleContext(QueryExpressionNointoContext::class, 0);
    }

    public function ALL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ALL, 0);
    }

    public function DISTINCT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DISTINCT, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterUnionStatement($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitUnionStatement($this);
        }
    }
}

