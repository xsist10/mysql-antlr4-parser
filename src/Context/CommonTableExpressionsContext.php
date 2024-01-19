<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class CommonTableExpressionsContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_commonTableExpressions;
    }

    public function cteName(): ?CteNameContext
    {
        return $this->getTypedRuleContext(CteNameContext::class, 0);
    }

    public function AS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::AS, 0);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function LR_BRACKET(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::LR_BRACKET);
        }

        return $this->getToken(MySqlParser::LR_BRACKET, $index);
    }

    public function dmlStatement(): ?DmlStatementContext
    {
        return $this->getTypedRuleContext(DmlStatementContext::class, 0);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function RR_BRACKET(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::RR_BRACKET);
        }

        return $this->getToken(MySqlParser::RR_BRACKET, $index);
    }

    /**
     * @return array<CteColumnNameContext>|CteColumnNameContext|null
     */
    public function cteColumnName(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(CteColumnNameContext::class);
        }

        return $this->getTypedRuleContext(CteColumnNameContext::class, $index);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function COMMA(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::COMMA);
        }

        return $this->getToken(MySqlParser::COMMA, $index);
    }

    public function commonTableExpressions(): ?CommonTableExpressionsContext
    {
        return $this->getTypedRuleContext(CommonTableExpressionsContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterCommonTableExpressions($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitCommonTableExpressions($this);
        }
    }
}

