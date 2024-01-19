<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class RepeatStatementContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_repeatStatement;
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function REPEAT(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::REPEAT);
        }

        return $this->getToken(MySqlParser::REPEAT, $index);
    }

    public function UNTIL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::UNTIL, 0);
    }

    public function expression(): ?ExpressionContext
    {
        return $this->getTypedRuleContext(ExpressionContext::class, 0);
    }

    public function END(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::END, 0);
    }

    /**
     * @return array<UidContext>|UidContext|null
     */
    public function uid(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(UidContext::class);
        }

        return $this->getTypedRuleContext(UidContext::class, $index);
    }

    public function COLON_SYMB(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::COLON_SYMB, 0);
    }

    /**
     * @return array<ProcedureSqlStatementContext>|ProcedureSqlStatementContext|null
     */
    public function procedureSqlStatement(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(ProcedureSqlStatementContext::class);
        }

        return $this->getTypedRuleContext(ProcedureSqlStatementContext::class, $index);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterRepeatStatement($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitRepeatStatement($this);
        }
    }
}

