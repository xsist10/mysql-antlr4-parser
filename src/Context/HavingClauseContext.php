<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class HavingClauseContext extends ParserRuleContext
{
    /**
     * @var ExpressionContext|null $havingExpr
     */
    public $havingExpr;

    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_havingClause;
    }

    public function HAVING(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::HAVING, 0);
    }

    public function expression(): ?ExpressionContext
    {
        return $this->getTypedRuleContext(ExpressionContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterHavingClause($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitHavingClause($this);
        }
    }
}

