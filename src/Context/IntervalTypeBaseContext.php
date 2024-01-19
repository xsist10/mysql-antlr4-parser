<?php

declare(strict_types=1);


namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class IntervalTypeBaseContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_intervalTypeBase;
    }

    public function QUARTER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::QUARTER, 0);
    }

    public function MONTH(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MONTH, 0);
    }

    public function DAY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DAY, 0);
    }

    public function HOUR(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::HOUR, 0);
    }

    public function MINUTE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MINUTE, 0);
    }

    public function WEEK(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::WEEK, 0);
    }

    public function SECOND(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SECOND, 0);
    }

    public function MICROSECOND(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MICROSECOND, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterIntervalTypeBase($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitIntervalTypeBase($this);
        }
    }
}
