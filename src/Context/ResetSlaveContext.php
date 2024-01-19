<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class ResetSlaveContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_resetSlave;
    }

    public function RESET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RESET, 0);
    }

    public function SLAVE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SLAVE, 0);
    }

    public function ALL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ALL, 0);
    }

    public function channelOption(): ?ChannelOptionContext
    {
        return $this->getTypedRuleContext(ChannelOptionContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterResetSlave($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitResetSlave($this);
        }
    }
}

