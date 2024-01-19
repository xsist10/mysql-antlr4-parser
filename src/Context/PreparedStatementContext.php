<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class PreparedStatementContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_preparedStatement;
    }

    public function prepareStatement(): ?PrepareStatementContext
    {
        return $this->getTypedRuleContext(PrepareStatementContext::class, 0);
    }

    public function executeStatement(): ?ExecuteStatementContext
    {
        return $this->getTypedRuleContext(ExecuteStatementContext::class, 0);
    }

    public function deallocatePrepare(): ?DeallocatePrepareContext
    {
        return $this->getTypedRuleContext(DeallocatePrepareContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterPreparedStatement($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitPreparedStatement($this);
        }
    }
}

