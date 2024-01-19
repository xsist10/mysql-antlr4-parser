<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class UpdateStatementContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_updateStatement;
    }

    public function singleUpdateStatement(): ?SingleUpdateStatementContext
    {
        return $this->getTypedRuleContext(SingleUpdateStatementContext::class, 0);
    }

    public function multipleUpdateStatement(): ?MultipleUpdateStatementContext
    {
        return $this->getTypedRuleContext(MultipleUpdateStatementContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterUpdateStatement($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitUpdateStatement($this);
        }
    }
}

