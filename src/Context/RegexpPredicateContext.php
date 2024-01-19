<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class RegexpPredicateContext extends PredicateContext
{
    /**
     * @var Token|null $regex
     */
    public $regex;

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

    public function REGEXP(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::REGEXP, 0);
    }

    public function RLIKE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RLIKE, 0);
    }

    public function NOT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::NOT, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterRegexpPredicate($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitRegexpPredicate($this);
        }
    }
}

