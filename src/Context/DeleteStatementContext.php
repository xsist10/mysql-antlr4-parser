<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class DeleteStatementContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_deleteStatement;
    }

    public function singleDeleteStatement(): ?SingleDeleteStatementContext
    {
        return $this->getTypedRuleContext(SingleDeleteStatementContext::class, 0);
    }

    public function multipleDeleteStatement(): ?MultipleDeleteStatementContext
    {
        return $this->getTypedRuleContext(MultipleDeleteStatementContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterDeleteStatement($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitDeleteStatement($this);
        }
    }
}

