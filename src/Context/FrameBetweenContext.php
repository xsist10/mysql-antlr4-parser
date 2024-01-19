<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class FrameBetweenContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_frameBetween;
    }

    public function BETWEEN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BETWEEN, 0);
    }

    /**
     * @return array<FrameRangeContext>|FrameRangeContext|null
     */
    public function frameRange(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(FrameRangeContext::class);
        }

        return $this->getTypedRuleContext(FrameRangeContext::class, $index);
    }

    public function AND(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::AND, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterFrameBetween($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitFrameBetween($this);
        }
    }
}

