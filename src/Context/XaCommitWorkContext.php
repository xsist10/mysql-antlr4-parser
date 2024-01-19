<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class XaCommitWorkContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_xaCommitWork;
    }

    public function XA(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::XA, 0);
    }

    public function COMMIT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::COMMIT, 0);
    }

    public function xid(): ?XidContext
    {
        return $this->getTypedRuleContext(XidContext::class, 0);
    }

    public function ONE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ONE, 0);
    }

    public function PHASE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PHASE, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterXaCommitWork($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitXaCommitWork($this);
        }
    }
}

