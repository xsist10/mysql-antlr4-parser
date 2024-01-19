<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class ProcedureSqlStatementContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_procedureSqlStatement;
    }

    public function SEMI(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SEMI, 0);
    }

    public function compoundStatement(): ?CompoundStatementContext
    {
        return $this->getTypedRuleContext(CompoundStatementContext::class, 0);
    }

    public function sqlStatement(): ?SqlStatementContext
    {
        return $this->getTypedRuleContext(SqlStatementContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterProcedureSqlStatement($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitProcedureSqlStatement($this);
        }
    }
}

