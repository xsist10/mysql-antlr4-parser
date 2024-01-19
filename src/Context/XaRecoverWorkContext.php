<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class XaRecoverWorkContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_xaRecoverWork;
    }

    public function XA(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::XA, 0);
    }

    public function RECOVER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RECOVER, 0);
    }

    public function CONVERT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CONVERT, 0);
    }

    public function xid(): ?XidContext
    {
        return $this->getTypedRuleContext(XidContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterXaRecoverWork($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitXaRecoverWork($this);
        }
    }
}

