<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class CompoundStatementContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_compoundStatement;
    }

    public function blockStatement(): ?BlockStatementContext
    {
        return $this->getTypedRuleContext(BlockStatementContext::class, 0);
    }

    public function caseStatement(): ?CaseStatementContext
    {
        return $this->getTypedRuleContext(CaseStatementContext::class, 0);
    }

    public function ifStatement(): ?IfStatementContext
    {
        return $this->getTypedRuleContext(IfStatementContext::class, 0);
    }

    public function leaveStatement(): ?LeaveStatementContext
    {
        return $this->getTypedRuleContext(LeaveStatementContext::class, 0);
    }

    public function loopStatement(): ?LoopStatementContext
    {
        return $this->getTypedRuleContext(LoopStatementContext::class, 0);
    }

    public function repeatStatement(): ?RepeatStatementContext
    {
        return $this->getTypedRuleContext(RepeatStatementContext::class, 0);
    }

    public function whileStatement(): ?WhileStatementContext
    {
        return $this->getTypedRuleContext(WhileStatementContext::class, 0);
    }

    public function iterateStatement(): ?IterateStatementContext
    {
        return $this->getTypedRuleContext(IterateStatementContext::class, 0);
    }

    public function returnStatement(): ?ReturnStatementContext
    {
        return $this->getTypedRuleContext(ReturnStatementContext::class, 0);
    }

    public function cursorStatement(): ?CursorStatementContext
    {
        return $this->getTypedRuleContext(CursorStatementContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterCompoundStatement($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitCompoundStatement($this);
        }
    }
}

