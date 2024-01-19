<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class WildDoTableReplicationContext extends ReplicationFilterContext
{
    public function __construct(ReplicationFilterContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function REPLICATE_WILD_DO_TABLE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::REPLICATE_WILD_DO_TABLE, 0);
    }

    public function EQUAL_SYMBOL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::EQUAL_SYMBOL, 0);
    }

    public function LR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LR_BRACKET, 0);
    }

    public function simpleStrings(): ?SimpleStringsContext
    {
        return $this->getTypedRuleContext(SimpleStringsContext::class, 0);
    }

    public function RR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RR_BRACKET, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterWildDoTableReplication($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitWildDoTableReplication($this);
        }
    }
}

