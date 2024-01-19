<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class StartGroupReplicationContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_startGroupReplication;
    }

    public function START(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::START, 0);
    }

    public function GROUP_REPLICATION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::GROUP_REPLICATION, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterStartGroupReplication($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitStartGroupReplication($this);
        }
    }
}

