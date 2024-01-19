<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class CallStatementContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_callStatement;
    }

    public function CALL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CALL, 0);
    }

    public function fullId(): ?FullIdContext
    {
        return $this->getTypedRuleContext(FullIdContext::class, 0);
    }

    public function LR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LR_BRACKET, 0);
    }

    public function RR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RR_BRACKET, 0);
    }

    public function constants(): ?ConstantsContext
    {
        return $this->getTypedRuleContext(ConstantsContext::class, 0);
    }

    public function expressions(): ?ExpressionsContext
    {
        return $this->getTypedRuleContext(ExpressionsContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterCallStatement($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitCallStatement($this);
        }
    }
}

