<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class OrderByClauseContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_orderByClause;
    }

    public function ORDER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ORDER, 0);
    }

    public function BY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BY, 0);
    }

    /**
     * @return array<OrderByExpressionContext>|OrderByExpressionContext|null
     */
    public function orderByExpression(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(OrderByExpressionContext::class);
        }

        return $this->getTypedRuleContext(OrderByExpressionContext::class, $index);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function COMMA(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::COMMA);
        }

        return $this->getToken(MySqlParser::COMMA, $index);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterOrderByClause($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitOrderByClause($this);
        }
    }
}

