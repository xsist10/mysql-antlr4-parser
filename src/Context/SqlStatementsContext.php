<?php

declare(strict_types=1);


namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class SqlStatementsContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_sqlStatements;
    }

    /**
     * @return array<SqlStatementContext>|SqlStatementContext|null
     */
    public function sqlStatement(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(SqlStatementContext::class);
        }

        return $this->getTypedRuleContext(SqlStatementContext::class, $index);
    }

    /**
     * @return array<EmptyStatementContext>|EmptyStatementContext|null
     */
    public function emptyStatement_(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(EmptyStatementContext::class);
        }

        return $this->getTypedRuleContext(EmptyStatementContext::class, $index);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function SEMI(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::SEMI);
        }

        return $this->getToken(MySqlParser::SEMI, $index);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function MINUS(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::MINUS);
        }

        return $this->getToken(MySqlParser::MINUS, $index);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterSqlStatements($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitSqlStatements($this);
        }
    }
}