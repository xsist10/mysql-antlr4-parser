<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class GroupByClauseContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_groupByClause;
    }

    public function GROUP(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::GROUP, 0);
    }

    public function BY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BY, 0);
    }

    /**
     * @return array<GroupByItemContext>|GroupByItemContext|null
     */
    public function groupByItem(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(GroupByItemContext::class);
        }

        return $this->getTypedRuleContext(GroupByItemContext::class, $index);
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

    public function ROLLUP(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ROLLUP, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterGroupByClause($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitGroupByClause($this);
        }
    }
}

