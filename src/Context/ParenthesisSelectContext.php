<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class ParenthesisSelectContext extends SelectStatementContext
{
    public function __construct(SelectStatementContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function queryExpression(): ?QueryExpressionContext
    {
        return $this->getTypedRuleContext(QueryExpressionContext::class, 0);
    }

    public function lockClause(): ?LockClauseContext
    {
        return $this->getTypedRuleContext(LockClauseContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterParenthesisSelect($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitParenthesisSelect($this);
        }
    }
}

