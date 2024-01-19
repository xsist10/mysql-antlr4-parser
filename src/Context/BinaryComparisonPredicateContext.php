<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class BinaryComparisonPredicateContext extends PredicateContext
{
    /**
     * @var PredicateContext|null $left
     */
    public $left;

    /**
     * @var PredicateContext|null $right
     */
    public $right;

    public function __construct(PredicateContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function comparisonOperator(): ?ComparisonOperatorContext
    {
        return $this->getTypedRuleContext(ComparisonOperatorContext::class, 0);
    }

    /**
     * @return array<PredicateContext>|PredicateContext|null
     */
    public function predicate(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(PredicateContext::class);
        }

        return $this->getTypedRuleContext(PredicateContext::class, $index);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterBinaryComparisonPredicate($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitBinaryComparisonPredicate($this);
        }
    }
}

