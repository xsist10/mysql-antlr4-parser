<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class MasterStringOptionContext extends MasterOptionContext
{
    public function __construct(MasterOptionContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function stringMasterOption(): ?StringMasterOptionContext
    {
        return $this->getTypedRuleContext(StringMasterOptionContext::class, 0);
    }

    public function EQUAL_SYMBOL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::EQUAL_SYMBOL, 0);
    }

    public function STRING_LITERAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STRING_LITERAL, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterMasterStringOption($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitMasterStringOption($this);
        }
    }
}

