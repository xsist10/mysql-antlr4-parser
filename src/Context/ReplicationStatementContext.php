<?php

declare(strict_types=1);


namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class ReplicationStatementContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_replicationStatement;
    }

    public function changeMaster(): ?ChangeMasterContext
    {
        return $this->getTypedRuleContext(ChangeMasterContext::class, 0);
    }

    public function changeReplicationFilter(): ?ChangeReplicationFilterContext
    {
        return $this->getTypedRuleContext(ChangeReplicationFilterContext::class, 0);
    }

    public function purgeBinaryLogs(): ?PurgeBinaryLogsContext
    {
        return $this->getTypedRuleContext(PurgeBinaryLogsContext::class, 0);
    }

    public function resetMaster(): ?ResetMasterContext
    {
        return $this->getTypedRuleContext(ResetMasterContext::class, 0);
    }

    public function resetSlave(): ?ResetSlaveContext
    {
        return $this->getTypedRuleContext(ResetSlaveContext::class, 0);
    }

    public function startSlave(): ?StartSlaveContext
    {
        return $this->getTypedRuleContext(StartSlaveContext::class, 0);
    }

    public function stopSlave(): ?StopSlaveContext
    {
        return $this->getTypedRuleContext(StopSlaveContext::class, 0);
    }

    public function startGroupReplication(): ?StartGroupReplicationContext
    {
        return $this->getTypedRuleContext(StartGroupReplicationContext::class, 0);
    }

    public function stopGroupReplication(): ?StopGroupReplicationContext
    {
        return $this->getTypedRuleContext(StopGroupReplicationContext::class, 0);
    }

    public function xaStartTransaction(): ?XaStartTransactionContext
    {
        return $this->getTypedRuleContext(XaStartTransactionContext::class, 0);
    }

    public function xaEndTransaction(): ?XaEndTransactionContext
    {
        return $this->getTypedRuleContext(XaEndTransactionContext::class, 0);
    }

    public function xaPrepareStatement(): ?XaPrepareStatementContext
    {
        return $this->getTypedRuleContext(XaPrepareStatementContext::class, 0);
    }

    public function xaCommitWork(): ?XaCommitWorkContext
    {
        return $this->getTypedRuleContext(XaCommitWorkContext::class, 0);
    }

    public function xaRollbackWork(): ?XaRollbackWorkContext
    {
        return $this->getTypedRuleContext(XaRollbackWorkContext::class, 0);
    }

    public function xaRecoverWork(): ?XaRecoverWorkContext
    {
        return $this->getTypedRuleContext(XaRecoverWorkContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterReplicationStatement($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitReplicationStatement($this);
        }
    }
}