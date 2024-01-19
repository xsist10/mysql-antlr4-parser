<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class TlsOptionContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_tlsOption;
    }

    public function SSL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SSL, 0);
    }

    public function X509(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::X509, 0);
    }

    public function CIPHER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CIPHER, 0);
    }

    public function STRING_LITERAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STRING_LITERAL, 0);
    }

    public function ISSUER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ISSUER, 0);
    }

    public function SUBJECT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SUBJECT, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterTlsOption($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitTlsOption($this);
        }
    }
}

