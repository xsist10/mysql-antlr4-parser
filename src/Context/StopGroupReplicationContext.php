<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class StopGroupReplicationContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_stopGroupReplication;
    }

    public function STOP(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STOP, 0);
    }

    public function GROUP_REPLICATION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::GROUP_REPLICATION, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterStopGroupReplication($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitStopGroupReplication($this);
        }
    }
}

