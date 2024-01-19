<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class IntervalScheduleContext extends ScheduleExpressionContext
{
    /**
     * @var TimestampValueContext|null $startTimestamp
     */
    public $startTimestamp;

    /**
     * @var IntervalExprContext|null $intervalExpr
     */
    public $intervalExpr;

    /**
     * @var TimestampValueContext|null $endTimestamp
     */
    public $endTimestamp;

    /**
     * @var array<IntervalExprContext>|null $startIntervals
     */
    public $startIntervals;

    /**
     * @var array<IntervalExprContext>|null $endIntervals
     */
    public $endIntervals;

    public function __construct(ScheduleExpressionContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function EVERY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::EVERY, 0);
    }

    public function intervalType(): ?IntervalTypeContext
    {
        return $this->getTypedRuleContext(IntervalTypeContext::class, 0);
    }

    public function decimalLiteral(): ?DecimalLiteralContext
    {
        return $this->getTypedRuleContext(DecimalLiteralContext::class, 0);
    }

    public function expression(): ?ExpressionContext
    {
        return $this->getTypedRuleContext(ExpressionContext::class, 0);
    }

    public function STARTS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STARTS, 0);
    }

    public function ENDS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ENDS, 0);
    }

    /**
     * @return array<TimestampValueContext>|TimestampValueContext|null
     */
    public function timestampValue(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(TimestampValueContext::class);
        }

        return $this->getTypedRuleContext(TimestampValueContext::class, $index);
    }

    /**
     * @return array<IntervalExprContext>|IntervalExprContext|null
     */
    public function intervalExpr(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(IntervalExprContext::class);
        }

        return $this->getTypedRuleContext(IntervalExprContext::class, $index);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterIntervalSchedule($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitIntervalSchedule($this);
        }
    }
}

