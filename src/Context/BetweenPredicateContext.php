<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class BetweenPredicateContext extends PredicateContext
{
    public function __construct(PredicateContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
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

    public function BETWEEN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BETWEEN, 0);
    }

    public function AND(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::AND, 0);
    }

    public function NOT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::NOT, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterBetweenPredicate($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitBetweenPredicate($this);
        }
    }
}

