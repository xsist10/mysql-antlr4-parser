<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class AnalyzeTableContext extends ParserRuleContext
{
    /**
     * @var Token|null $actionOption
     */
    public $actionOption;

    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_analyzeTable;
    }

    public function ANALYZE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ANALYZE, 0);
    }

    public function tables(): ?TablesContext
    {
        return $this->getTypedRuleContext(TablesContext::class, 0);
    }

    public function TABLE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TABLE, 0);
    }

    public function TABLES(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TABLES, 0);
    }

    public function UPDATE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::UPDATE, 0);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function HISTOGRAM(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::HISTOGRAM);
        }

        return $this->getToken(MySqlParser::HISTOGRAM, $index);
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

    /**
     * @return array<FullColumnNameContext>|FullColumnNameContext|null
     */
    public function fullColumnName(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(FullColumnNameContext::class);
        }

        return $this->getTypedRuleContext(FullColumnNameContext::class, $index);
    }

    public function DROP(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DROP, 0);
    }

    public function NO_WRITE_TO_BINLOG(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::NO_WRITE_TO_BINLOG, 0);
    }

    public function LOCAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LOCAL, 0);
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

    public function WITH(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::WITH, 0);
    }

    public function decimalLiteral(): ?DecimalLiteralContext
    {
        return $this->getTypedRuleContext(DecimalLiteralContext::class, 0);
    }

    public function BUCKETS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BUCKETS, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterAnalyzeTable($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitAnalyzeTable($this);
        }
    }
}

