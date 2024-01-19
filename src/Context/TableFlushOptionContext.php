<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class TableFlushOptionContext extends FlushOptionContext
{
    public function __construct(FlushOptionContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function TABLE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TABLE, 0);
    }

    public function TABLES(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TABLES, 0);
    }

    public function tables(): ?TablesContext
    {
        return $this->getTypedRuleContext(TablesContext::class, 0);
    }

    public function flushTableOption(): ?FlushTableOptionContext
    {
        return $this->getTypedRuleContext(FlushTableOptionContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterTableFlushOption($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitTableFlushOption($this);
        }
    }
}

