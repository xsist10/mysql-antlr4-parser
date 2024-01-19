<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class TableOptionEngineAttributeContext extends TableOptionContext
{
    public function __construct(TableOptionContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function ENGINE_ATTRIBUTE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ENGINE_ATTRIBUTE, 0);
    }

    public function STRING_LITERAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STRING_LITERAL, 0);
    }

    public function EQUAL_SYMBOL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::EQUAL_SYMBOL, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterTableOptionEngineAttribute($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitTableOptionEngineAttribute($this);
        }
    }
}

