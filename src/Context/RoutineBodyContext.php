<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class RoutineBodyContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_routineBody;
    }

    public function blockStatement(): ?BlockStatementContext
    {
        return $this->getTypedRuleContext(BlockStatementContext::class, 0);
    }

    public function sqlStatement(): ?SqlStatementContext
    {
        return $this->getTypedRuleContext(SqlStatementContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterRoutineBody($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitRoutineBody($this);
        }
    }
}

