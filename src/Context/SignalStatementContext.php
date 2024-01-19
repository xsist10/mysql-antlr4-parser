<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class SignalStatementContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_signalStatement;
    }

    public function SIGNAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SIGNAL, 0);
    }

    public function ID(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ID, 0);
    }

    public function REVERSE_QUOTE_ID(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::REVERSE_QUOTE_ID, 0);
    }

    public function SET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SET, 0);
    }

    /**
     * @return array<SignalConditionInformationContext>|SignalConditionInformationContext|null
     */
    public function signalConditionInformation(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(SignalConditionInformationContext::class);
        }

        return $this->getTypedRuleContext(SignalConditionInformationContext::class, $index);
    }

    public function SQLSTATE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SQLSTATE, 0);
    }

    public function stringLiteral(): ?StringLiteralContext
    {
        return $this->getTypedRuleContext(StringLiteralContext::class, 0);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function COMMA(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::COMMA);
        }

        return $this->getToken(MySqlParser::COMMA, $index);
    }

    public function VALUE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::VALUE, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterSignalStatement($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitSignalStatement($this);
        }
    }
}

