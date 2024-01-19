<?php

declare(strict_types=1);


namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class DmlStatementContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_dmlStatement;
    }

    public function selectStatement(): ?SelectStatementContext
    {
        return $this->getTypedRuleContext(SelectStatementContext::class, 0);
    }

    public function insertStatement(): ?InsertStatementContext
    {
        return $this->getTypedRuleContext(InsertStatementContext::class, 0);
    }

    public function updateStatement(): ?UpdateStatementContext
    {
        return $this->getTypedRuleContext(UpdateStatementContext::class, 0);
    }

    public function deleteStatement(): ?DeleteStatementContext
    {
        return $this->getTypedRuleContext(DeleteStatementContext::class, 0);
    }

    public function replaceStatement(): ?ReplaceStatementContext
    {
        return $this->getTypedRuleContext(ReplaceStatementContext::class, 0);
    }

    public function callStatement(): ?CallStatementContext
    {
        return $this->getTypedRuleContext(CallStatementContext::class, 0);
    }

    public function loadDataStatement(): ?LoadDataStatementContext
    {
        return $this->getTypedRuleContext(LoadDataStatementContext::class, 0);
    }

    public function loadXmlStatement(): ?LoadXmlStatementContext
    {
        return $this->getTypedRuleContext(LoadXmlStatementContext::class, 0);
    }

    public function doStatement(): ?DoStatementContext
    {
        return $this->getTypedRuleContext(DoStatementContext::class, 0);
    }

    public function handlerStatement(): ?HandlerStatementContext
    {
        return $this->getTypedRuleContext(HandlerStatementContext::class, 0);
    }

    public function valuesStatement(): ?ValuesStatementContext
    {
        return $this->getTypedRuleContext(ValuesStatementContext::class, 0);
    }

    public function withStatement(): ?WithStatementContext
    {
        return $this->getTypedRuleContext(WithStatementContext::class, 0);
    }

    public function tableStatement(): ?TableStatementContext
    {
        return $this->getTypedRuleContext(TableStatementContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterDmlStatement($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitDmlStatement($this);
        }
    }
}
