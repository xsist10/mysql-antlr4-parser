<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class SimpleSelectContext extends SelectStatementContext
{
    public function __construct(SelectStatementContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function querySpecification(): ?QuerySpecificationContext
    {
        return $this->getTypedRuleContext(QuerySpecificationContext::class, 0);
    }

    public function lockClause(): ?LockClauseContext
    {
        return $this->getTypedRuleContext(LockClauseContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterSimpleSelect($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitSimpleSelect($this);
        }
    }
}

