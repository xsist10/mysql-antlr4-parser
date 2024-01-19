<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class IgnoreDbReplicationContext extends ReplicationFilterContext
{
    public function __construct(ReplicationFilterContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function REPLICATE_IGNORE_DB(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::REPLICATE_IGNORE_DB, 0);
    }

    public function EQUAL_SYMBOL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::EQUAL_SYMBOL, 0);
    }

    public function LR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LR_BRACKET, 0);
    }

    public function uidList(): ?UidListContext
    {
        return $this->getTypedRuleContext(UidListContext::class, 0);
    }

    public function RR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RR_BRACKET, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterIgnoreDbReplication($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitIgnoreDbReplication($this);
        }
    }
}
