<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class DropFunctionContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_dropFunction;
    }

    public function DROP(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DROP, 0);
    }

    public function FUNCTION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FUNCTION, 0);
    }

    public function fullId(): ?FullIdContext
    {
        return $this->getTypedRuleContext(FullIdContext::class, 0);
    }

    public function ifExists(): ?IfExistsContext
    {
        return $this->getTypedRuleContext(IfExistsContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterDropFunction($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitDropFunction($this);
        }
    }
}

