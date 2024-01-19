<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class DiagnosticsStatementContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_diagnosticsStatement;
    }

    public function GET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::GET, 0);
    }

    public function DIAGNOSTICS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DIAGNOSTICS, 0);
    }

    public function CURRENT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CURRENT, 0);
    }

    public function STACKED(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STACKED, 0);
    }

    /**
     * @return array<VariableClauseContext>|VariableClauseContext|null
     */
    public function variableClause(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(VariableClauseContext::class);
        }

        return $this->getTypedRuleContext(VariableClauseContext::class, $index);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function EQUAL_SYMBOL(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::EQUAL_SYMBOL);
        }

        return $this->getToken(MySqlParser::EQUAL_SYMBOL, $index);
    }

    public function CONDITION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CONDITION, 0);
    }

    /**
     * @return array<DiagnosticsConditionInformationNameContext>|DiagnosticsConditionInformationNameContext|null
     */
    public function diagnosticsConditionInformationName(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(DiagnosticsConditionInformationNameContext::class);
        }

        return $this->getTypedRuleContext(DiagnosticsConditionInformationNameContext::class, $index);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function NUMBER(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::NUMBER);
        }

        return $this->getToken(MySqlParser::NUMBER, $index);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function ROW_COUNT(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::ROW_COUNT);
        }

        return $this->getToken(MySqlParser::ROW_COUNT, $index);
    }

    public function decimalLiteral(): ?DecimalLiteralContext
    {
        return $this->getTypedRuleContext(DecimalLiteralContext::class, 0);
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

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterDiagnosticsStatement($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitDiagnosticsStatement($this);
        }
    }
}

