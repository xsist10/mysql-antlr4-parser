<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class TransactionStatementContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_transactionStatement;
    }

    public function startTransaction(): ?StartTransactionContext
    {
        return $this->getTypedRuleContext(StartTransactionContext::class, 0);
    }

    public function beginWork(): ?BeginWorkContext
    {
        return $this->getTypedRuleContext(BeginWorkContext::class, 0);
    }

    public function commitWork(): ?CommitWorkContext
    {
        return $this->getTypedRuleContext(CommitWorkContext::class, 0);
    }

    public function rollbackWork(): ?RollbackWorkContext
    {
        return $this->getTypedRuleContext(RollbackWorkContext::class, 0);
    }

    public function savepointStatement(): ?SavepointStatementContext
    {
        return $this->getTypedRuleContext(SavepointStatementContext::class, 0);
    }

    public function rollbackStatement(): ?RollbackStatementContext
    {
        return $this->getTypedRuleContext(RollbackStatementContext::class, 0);
    }

    public function releaseStatement(): ?ReleaseStatementContext
    {
        return $this->getTypedRuleContext(ReleaseStatementContext::class, 0);
    }

    public function lockTables(): ?LockTablesContext
    {
        return $this->getTypedRuleContext(LockTablesContext::class, 0);
    }

    public function unlockTables(): ?UnlockTablesContext
    {
        return $this->getTypedRuleContext(UnlockTablesContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterTransactionStatement($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitTransactionStatement($this);
        }
    }
}

