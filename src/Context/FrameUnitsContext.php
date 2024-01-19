<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class FrameUnitsContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_frameUnits;
    }

    public function ROWS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ROWS, 0);
    }

    public function RANGE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RANGE, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterFrameUnits($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitFrameUnits($this);
        }
    }
}

