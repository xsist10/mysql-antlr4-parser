<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class XaRollbackWorkContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_xaRollbackWork;
    }

    public function XA(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::XA, 0);
    }

    public function ROLLBACK(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ROLLBACK, 0);
    }

    public function xid(): ?XidContext
    {
        return $this->getTypedRuleContext(XidContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterXaRollbackWork($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitXaRollbackWork($this);
        }
    }
}

