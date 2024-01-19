<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class LogicalExpressionContext extends ExpressionContext
{
    public function __construct(ExpressionContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    /**
     * @return array<ExpressionContext>|ExpressionContext|null
     */
    public function expression(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(ExpressionContext::class);
        }

        return $this->getTypedRuleContext(ExpressionContext::class, $index);
    }

    public function logicalOperator(): ?LogicalOperatorContext
    {
        return $this->getTypedRuleContext(LogicalOperatorContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterLogicalExpression($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitLogicalExpression($this);
        }
    }
}

