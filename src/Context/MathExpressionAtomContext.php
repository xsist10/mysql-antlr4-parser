<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class MathExpressionAtomContext extends ExpressionAtomContext
{
    /**
     * @var ExpressionAtomContext|null $left
     */
    public $left;

    /**
     * @var ExpressionAtomContext|null $right
     */
    public $right;

    public function __construct(ExpressionAtomContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function multOperator(): ?MultOperatorContext
    {
        return $this->getTypedRuleContext(MultOperatorContext::class, 0);
    }

    /**
     * @return array<ExpressionAtomContext>|ExpressionAtomContext|null
     */
    public function expressionAtom(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(ExpressionAtomContext::class);
        }

        return $this->getTypedRuleContext(ExpressionAtomContext::class, $index);
    }

    public function addOperator(): ?AddOperatorContext
    {
        return $this->getTypedRuleContext(AddOperatorContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterMathExpressionAtom($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitMathExpressionAtom($this);
        }
    }
}

