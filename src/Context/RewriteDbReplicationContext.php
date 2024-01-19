<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class RewriteDbReplicationContext extends ReplicationFilterContext
{
    public function __construct(ReplicationFilterContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function REPLICATE_REWRITE_DB(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::REPLICATE_REWRITE_DB, 0);
    }

    public function EQUAL_SYMBOL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::EQUAL_SYMBOL, 0);
    }

    public function LR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LR_BRACKET, 0);
    }

    /**
     * @return array<TablePairContext>|TablePairContext|null
     */
    public function tablePair(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(TablePairContext::class);
        }

        return $this->getTypedRuleContext(TablePairContext::class, $index);
    }

    public function RR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RR_BRACKET, 0);
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

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterRewriteDbReplication($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitRewriteDbReplication($this);
        }
    }
}

