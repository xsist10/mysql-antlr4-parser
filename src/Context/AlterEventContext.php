<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class AlterEventContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_alterEvent;
    }

    public function ALTER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ALTER, 0);
    }

    public function EVENT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::EVENT, 0);
    }

    /**
     * @return array<FullIdContext>|FullIdContext|null
     */
    public function fullId(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(FullIdContext::class);
        }

        return $this->getTypedRuleContext(FullIdContext::class, $index);
    }

    public function ownerStatement(): ?OwnerStatementContext
    {
        return $this->getTypedRuleContext(OwnerStatementContext::class, 0);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function ON(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::ON);
        }

        return $this->getToken(MySqlParser::ON, $index);
    }

    public function SCHEDULE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SCHEDULE, 0);
    }

    public function scheduleExpression(): ?ScheduleExpressionContext
    {
        return $this->getTypedRuleContext(ScheduleExpressionContext::class, 0);
    }

    public function COMPLETION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::COMPLETION, 0);
    }

    public function PRESERVE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PRESERVE, 0);
    }

    public function RENAME(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RENAME, 0);
    }

    public function TO(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TO, 0);
    }

    public function enableType(): ?EnableTypeContext
    {
        return $this->getTypedRuleContext(EnableTypeContext::class, 0);
    }

    public function COMMENT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::COMMENT, 0);
    }

    public function STRING_LITERAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STRING_LITERAL, 0);
    }

    public function DO(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DO, 0);
    }

    public function routineBody(): ?RoutineBodyContext
    {
        return $this->getTypedRuleContext(RoutineBodyContext::class, 0);
    }

    public function NOT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::NOT, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterAlterEvent($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitAlterEvent($this);
        }
    }
}

