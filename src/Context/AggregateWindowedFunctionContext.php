<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class AggregateWindowedFunctionContext extends ParserRuleContext
{
    /**
     * @var Token|null $aggregator
     */
    public $aggregator;

    /**
     * @var Token|null $starArg
     */
    public $starArg;

    /**
     * @var Token|null $separator
     */
    public $separator;

    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_aggregateWindowedFunction;
    }

    public function LR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LR_BRACKET, 0);
    }

    public function functionArg(): ?FunctionArgContext
    {
        return $this->getTypedRuleContext(FunctionArgContext::class, 0);
    }

    public function RR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RR_BRACKET, 0);
    }

    public function AVG(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::AVG, 0);
    }

    public function MAX(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MAX, 0);
    }

    public function MIN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MIN, 0);
    }

    public function SUM(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SUM, 0);
    }

    public function overClause(): ?OverClauseContext
    {
        return $this->getTypedRuleContext(OverClauseContext::class, 0);
    }

    public function ALL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ALL, 0);
    }

    public function DISTINCT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DISTINCT, 0);
    }

    public function COUNT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::COUNT, 0);
    }

    public function functionArgs(): ?FunctionArgsContext
    {
        return $this->getTypedRuleContext(FunctionArgsContext::class, 0);
    }

    public function STAR(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STAR, 0);
    }

    public function BIT_AND(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BIT_AND, 0);
    }

    public function BIT_OR(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BIT_OR, 0);
    }

    public function BIT_XOR(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BIT_XOR, 0);
    }

    public function STD(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STD, 0);
    }

    public function STDDEV(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STDDEV, 0);
    }

    public function STDDEV_POP(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STDDEV_POP, 0);
    }

    public function STDDEV_SAMP(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STDDEV_SAMP, 0);
    }

    public function VAR_POP(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::VAR_POP, 0);
    }

    public function VAR_SAMP(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::VAR_SAMP, 0);
    }

    public function VARIANCE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::VARIANCE, 0);
    }

    public function GROUP_CONCAT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::GROUP_CONCAT, 0);
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

    public function SEPARATOR(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SEPARATOR, 0);
    }

    public function STRING_LITERAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STRING_LITERAL, 0);
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
            $listener->enterAggregateWindowedFunction($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitAggregateWindowedFunction($this);
        }
    }
}

