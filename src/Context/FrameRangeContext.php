<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class FrameRangeContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_frameRange;
    }

    public function CURRENT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CURRENT, 0);
    }

    public function ROW(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ROW, 0);
    }

    public function UNBOUNDED(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::UNBOUNDED, 0);
    }

    public function PRECEDING(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PRECEDING, 0);
    }

    public function FOLLOWING(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FOLLOWING, 0);
    }

    public function expression(): ?ExpressionContext
    {
        return $this->getTypedRuleContext(ExpressionContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterFrameRange($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitFrameRange($this);
        }
    }
}

