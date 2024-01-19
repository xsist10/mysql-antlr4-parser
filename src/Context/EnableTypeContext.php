<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class EnableTypeContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_enableType;
    }

    public function ENABLE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ENABLE, 0);
    }

    public function DISABLE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DISABLE, 0);
    }

    public function ON(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ON, 0);
    }

    public function SLAVE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SLAVE, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterEnableType($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitEnableType($this);
        }
    }
}

