<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class ChannelFlushOptionContext extends FlushOptionContext
{
    public function __construct(FlushOptionContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function RELAY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RELAY, 0);
    }

    public function LOGS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LOGS, 0);
    }

    public function channelOption(): ?ChannelOptionContext
    {
        return $this->getTypedRuleContext(ChannelOptionContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterChannelFlushOption($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitChannelFlushOption($this);
        }
    }
}

