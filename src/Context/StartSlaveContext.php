<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class StartSlaveContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_startSlave;
    }

    public function START(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::START, 0);
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

    public function UNTIL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::UNTIL, 0);
    }

    public function untilOption(): ?UntilOptionContext
    {
        return $this->getTypedRuleContext(UntilOptionContext::class, 0);
    }

    /**
     * @return array<ConnectionOptionContext>|ConnectionOptionContext|null
     */
    public function connectionOption(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(ConnectionOptionContext::class);
        }

        return $this->getTypedRuleContext(ConnectionOptionContext::class, $index);
    }

    public function channelOption(): ?ChannelOptionContext
    {
        return $this->getTypedRuleContext(ChannelOptionContext::class, 0);
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
            $listener->enterStartSlave($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitStartSlave($this);
        }
    }
}

