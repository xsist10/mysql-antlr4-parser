<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class OrderByExpressionContext extends ParserRuleContext
{
    /**
     * @var Token|null $order
     */
    public $order;

    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_orderByExpression;
    }

    public function expression(): ?ExpressionContext
    {
        return $this->getTypedRuleContext(ExpressionContext::class, 0);
    }

    public function ASC(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ASC, 0);
    }

    public function DESC(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DESC, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterOrderByExpression($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitOrderByExpression($this);
        }
    }
}

