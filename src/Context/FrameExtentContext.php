<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class FrameExtentContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_frameExtent;
    }

    public function frameRange(): ?FrameRangeContext
    {
        return $this->getTypedRuleContext(FrameRangeContext::class, 0);
    }

    public function frameBetween(): ?FrameBetweenContext
    {
        return $this->getTypedRuleContext(FrameBetweenContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterFrameExtent($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitFrameExtent($this);
        }
    }
}

