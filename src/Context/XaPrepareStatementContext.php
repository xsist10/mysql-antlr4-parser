<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class XaPrepareStatementContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_xaPrepareStatement;
    }

    public function XA(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::XA, 0);
    }

    public function PREPARE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PREPARE, 0);
    }

    public function xid(): ?XidContext
    {
        return $this->getTypedRuleContext(XidContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterXaPrepareStatement($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitXaPrepareStatement($this);
        }
    }
}

