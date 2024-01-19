<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class WindowSpecContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_windowSpec;
    }

    public function windowName(): ?WindowNameContext
    {
        return $this->getTypedRuleContext(WindowNameContext::class, 0);
    }

    public function partitionClause(): ?PartitionClauseContext
    {
        return $this->getTypedRuleContext(PartitionClauseContext::class, 0);
    }

    public function orderByClause(): ?OrderByClauseContext
    {
        return $this->getTypedRuleContext(OrderByClauseContext::class, 0);
    }

    public function frameClause(): ?FrameClauseContext
    {
        return $this->getTypedRuleContext(FrameClauseContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterWindowSpec($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitWindowSpec($this);
        }
    }
}

