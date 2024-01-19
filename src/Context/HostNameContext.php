<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class HostNameContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_hostName;
    }

    public function LOCAL_ID(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LOCAL_ID, 0);
    }

    public function HOST_IP_ADDRESS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::HOST_IP_ADDRESS, 0);
    }

    public function AT_SIGN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::AT_SIGN, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterHostName($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitHostName($this);
        }
    }
}

