<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class SimpleDescribeStatementContext extends ParserRuleContext
{
    /**
     * @var Token|null $command
     */
    public $command;

    /**
     * @var Token|null $pattern
     */
    public $pattern;

    /**
     * @var UidContext|null $column
     */
    public $column;

    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_simpleDescribeStatement;
    }

    public function tableName(): ?TableNameContext
    {
        return $this->getTypedRuleContext(TableNameContext::class, 0);
    }

    public function EXPLAIN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::EXPLAIN, 0);
    }

    public function DESCRIBE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DESCRIBE, 0);
    }

    public function DESC(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DESC, 0);
    }

    public function uid(): ?UidContext
    {
        return $this->getTypedRuleContext(UidContext::class, 0);
    }

    public function STRING_LITERAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STRING_LITERAL, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterSimpleDescribeStatement($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitSimpleDescribeStatement($this);
        }
    }
}

