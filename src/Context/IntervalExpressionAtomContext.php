<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class IntervalExpressionAtomContext extends ExpressionAtomContext
{
    public function __construct(ExpressionAtomContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function INTERVAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INTERVAL, 0);
    }

    public function expression(): ?ExpressionContext
    {
        return $this->getTypedRuleContext(ExpressionContext::class, 0);
    }

    public function intervalType(): ?IntervalTypeContext
    {
        return $this->getTypedRuleContext(IntervalTypeContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterIntervalExpressionAtom($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitIntervalExpressionAtom($this);
        }
    }
}

