<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class TableSourcesItemContext extends TableSourceItemContext
{
    public function __construct(TableSourceItemContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function LR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LR_BRACKET, 0);
    }

    public function tableSources(): ?TableSourcesContext
    {
        return $this->getTypedRuleContext(TableSourcesContext::class, 0);
    }

    public function RR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RR_BRACKET, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterTableSourcesItem($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitTableSourcesItem($this);
        }
    }
}

