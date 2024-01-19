<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class IsExpressionContext extends ExpressionContext
{
    /**
     * @var Token|null $testValue
     */
    public $testValue;

    public function __construct(ExpressionContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function predicate(): ?PredicateContext
    {
        return $this->getTypedRuleContext(PredicateContext::class, 0);
    }

    public function IS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::IS, 0);
    }

    public function TRUE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TRUE, 0);
    }

    public function FALSE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FALSE, 0);
    }

    public function UNKNOWN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::UNKNOWN, 0);
    }

    public function NOT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::NOT, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterIsExpression($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitIsExpression($this);
        }
    }
}

