<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class FrameClauseContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_frameClause;
    }

    public function frameUnits(): ?FrameUnitsContext
    {
        return $this->getTypedRuleContext(FrameUnitsContext::class, 0);
    }

    public function frameExtent(): ?FrameExtentContext
    {
        return $this->getTypedRuleContext(FrameExtentContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterFrameClause($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitFrameClause($this);
        }
    }
}

