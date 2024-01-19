<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class ServerOptionContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_serverOption;
    }

    public function HOST(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::HOST, 0);
    }

    public function STRING_LITERAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STRING_LITERAL, 0);
    }

    public function DATABASE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DATABASE, 0);
    }

    public function USER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::USER, 0);
    }

    public function PASSWORD(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PASSWORD, 0);
    }

    public function SOCKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SOCKET, 0);
    }

    public function OWNER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::OWNER, 0);
    }

    public function PORT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PORT, 0);
    }

    public function decimalLiteral(): ?DecimalLiteralContext
    {
        return $this->getTypedRuleContext(DecimalLiteralContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterServerOption($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitServerOption($this);
        }
    }
}

