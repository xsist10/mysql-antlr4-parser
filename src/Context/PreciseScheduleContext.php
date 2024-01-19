<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class PreciseScheduleContext extends ScheduleExpressionContext
{
    public function __construct(ScheduleExpressionContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function AT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::AT, 0);
    }

    public function timestampValue(): ?TimestampValueContext
    {
        return $this->getTypedRuleContext(TimestampValueContext::class, 0);
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
            $listener->enterPreciseSchedule($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitPreciseSchedule($this);
        }
    }
}

