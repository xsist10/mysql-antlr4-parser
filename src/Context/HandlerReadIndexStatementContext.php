<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class HandlerReadIndexStatementContext extends ParserRuleContext
{
    /**
     * @var Token|null $moveOrder
     */
    public $moveOrder;

    /**
     * @var UidContext|null $index
     */
    public $index;

    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_handlerReadIndexStatement;
    }

    public function HANDLER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::HANDLER, 0);
    }

    public function tableName(): ?TableNameContext
    {
        return $this->getTypedRuleContext(TableNameContext::class, 0);
    }

    public function READ(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::READ, 0);
    }

    public function uid(): ?UidContext
    {
        return $this->getTypedRuleContext(UidContext::class, 0);
    }

    public function comparisonOperator(): ?ComparisonOperatorContext
    {
        return $this->getTypedRuleContext(ComparisonOperatorContext::class, 0);
    }

    public function LR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LR_BRACKET, 0);
    }

    public function constants(): ?ConstantsContext
    {
        return $this->getTypedRuleContext(ConstantsContext::class, 0);
    }

    public function RR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RR_BRACKET, 0);
    }

    public function WHERE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::WHERE, 0);
    }

    public function expression(): ?ExpressionContext
    {
        return $this->getTypedRuleContext(ExpressionContext::class, 0);
    }

    public function LIMIT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LIMIT, 0);
    }

    public function limitClauseAtom(): ?LimitClauseAtomContext
    {
        return $this->getTypedRuleContext(LimitClauseAtomContext::class, 0);
    }

    public function FIRST(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FIRST, 0);
    }

    public function NEXT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::NEXT, 0);
    }

    public function PREV(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PREV, 0);
    }

    public function LAST(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LAST, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterHandlerReadIndexStatement($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitHandlerReadIndexStatement($this);
        }
    }
}

