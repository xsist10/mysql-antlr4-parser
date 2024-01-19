<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class XaStartTransactionContext extends ParserRuleContext
{
    /**
     * @var Token|null $xaStart
     */
    public $xaStart;

    /**
     * @var Token|null $xaAction
     */
    public $xaAction;

    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_xaStartTransaction;
    }

    public function XA(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::XA, 0);
    }

    public function xid(): ?XidContext
    {
        return $this->getTypedRuleContext(XidContext::class, 0);
    }

    public function START(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::START, 0);
    }

    public function BEGIN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BEGIN, 0);
    }

    public function JOIN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::JOIN, 0);
    }

    public function RESUME(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RESUME, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterXaStartTransaction($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitXaStartTransaction($this);
        }
    }
}

