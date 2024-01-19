<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class LikePredicateContext extends PredicateContext
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

    public function LIKE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LIKE, 0);
    }

    public function NOT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::NOT, 0);
    }

    public function ESCAPE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ESCAPE, 0);
    }

    public function STRING_LITERAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STRING_LITERAL, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterLikePredicate($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitLikePredicate($this);
        }
    }
}

