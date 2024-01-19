<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class UnionParenthesisSelectContext extends SelectStatementContext
{
    /**
     * @var Token|null $unionType
     */
    public $unionType;

    public function __construct(SelectStatementContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function queryExpressionNointo(): ?QueryExpressionNointoContext
    {
        return $this->getTypedRuleContext(QueryExpressionNointoContext::class, 0);
    }

    /**
     * @return array<UnionParenthesisContext>|UnionParenthesisContext|null
     */
    public function unionParenthesis(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(UnionParenthesisContext::class);
        }

        return $this->getTypedRuleContext(UnionParenthesisContext::class, $index);
    }

    public function UNION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::UNION, 0);
    }

    public function queryExpression(): ?QueryExpressionContext
    {
        return $this->getTypedRuleContext(QueryExpressionContext::class, 0);
    }

    public function orderByClause(): ?OrderByClauseContext
    {
        return $this->getTypedRuleContext(OrderByClauseContext::class, 0);
    }

    public function limitClause(): ?LimitClauseContext
    {
        return $this->getTypedRuleContext(LimitClauseContext::class, 0);
    }

    public function lockClause(): ?LockClauseContext
    {
        return $this->getTypedRuleContext(LockClauseContext::class, 0);
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
            $listener->enterUnionParenthesisSelect($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitUnionParenthesisSelect($this);
        }
    }
}

