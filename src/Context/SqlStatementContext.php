<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class SqlStatementContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_sqlStatement;
    }

    public function ddlStatement(): ?DdlStatementContext
    {
        return $this->getTypedRuleContext(DdlStatementContext::class, 0);
    }

    public function dmlStatement(): ?DmlStatementContext
    {
        return $this->getTypedRuleContext(DmlStatementContext::class, 0);
    }

    public function transactionStatement(): ?TransactionStatementContext
    {
        return $this->getTypedRuleContext(TransactionStatementContext::class, 0);
    }

    public function replicationStatement(): ?ReplicationStatementContext
    {
        return $this->getTypedRuleContext(ReplicationStatementContext::class, 0);
    }

    public function preparedStatement(): ?PreparedStatementContext
    {
        return $this->getTypedRuleContext(PreparedStatementContext::class, 0);
    }

    public function administrationStatement(): ?AdministrationStatementContext
    {
        return $this->getTypedRuleContext(AdministrationStatementContext::class, 0);
    }

    public function utilityStatement(): ?UtilityStatementContext
    {
        return $this->getTypedRuleContext(UtilityStatementContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterSqlStatement($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitSqlStatement($this);
        }
    }
}

