<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class RollbackStatementContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_rollbackStatement;
    }

    public function ROLLBACK(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ROLLBACK, 0);
    }

    public function TO(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TO, 0);
    }

    public function uid(): ?UidContext
    {
        return $this->getTypedRuleContext(UidContext::class, 0);
    }

    public function WORK(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::WORK, 0);
    }

    public function SAVEPOINT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SAVEPOINT, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterRollbackStatement($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitRollbackStatement($this);
        }
    }
}

