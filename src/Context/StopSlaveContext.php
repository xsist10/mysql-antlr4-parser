<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class StopSlaveContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_stopSlave;
    }

    public function STOP(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STOP, 0);
    }

    public function SLAVE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SLAVE, 0);
    }

    /**
     * @return array<ThreadTypeContext>|ThreadTypeContext|null
     */
    public function threadType(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(ThreadTypeContext::class);
        }

        return $this->getTypedRuleContext(ThreadTypeContext::class, $index);
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
            $listener->enterStopSlave($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitStopSlave($this);
        }
    }
}

