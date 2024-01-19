<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class ReferenceControlTypeContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_referenceControlType;
    }

    public function RESTRICT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RESTRICT, 0);
    }

    public function CASCADE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CASCADE, 0);
    }

    public function SET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SET, 0);
    }

    public function NULL_LITERAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::NULL_LITERAL, 0);
    }

    public function NO(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::NO, 0);
    }

    public function ACTION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ACTION, 0);
    }

    public function DEFAULT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DEFAULT, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterReferenceControlType($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitReferenceControlType($this);
        }
    }
}

