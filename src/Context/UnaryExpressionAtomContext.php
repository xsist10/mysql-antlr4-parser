<?php

declare(strict_types=1);


namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use MySqlAntl4\MySqlParserListener;

class UnaryExpressionAtomContext extends ExpressionAtomContext
{
    public function __construct(ExpressionAtomContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function unaryOperator(): ?UnaryOperatorContext
    {
        return $this->getTypedRuleContext(UnaryOperatorContext::class, 0);
    }

    public function expressionAtom(): ?ExpressionAtomContext
    {
        return $this->getTypedRuleContext(ExpressionAtomContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterUnaryExpressionAtom($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitUnaryExpressionAtom($this);
        }
    }
}
