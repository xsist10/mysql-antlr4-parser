<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class IfStatementContext extends ParserRuleContext
{
    /**
     * @var ProcedureSqlStatementContext|null $procedureSqlStatement
     */
    public $procedureSqlStatement;

    /**
     * @var array<ProcedureSqlStatementContext>|null $thenStatements
     */
    public $thenStatements;

    /**
     * @var array<ProcedureSqlStatementContext>|null $elseStatements
     */
    public $elseStatements;

    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_ifStatement;
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function IF(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::IF);
        }

        return $this->getToken(MySqlParser::IF, $index);
    }

    public function expression(): ?ExpressionContext
    {
        return $this->getTypedRuleContext(ExpressionContext::class, 0);
    }

    public function THEN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::THEN, 0);
    }

    public function END(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::END, 0);
    }

    /**
     * @return array<ElifAlternativeContext>|ElifAlternativeContext|null
     */
    public function elifAlternative(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(ElifAlternativeContext::class);
        }

        return $this->getTypedRuleContext(ElifAlternativeContext::class, $index);
    }

    public function ELSE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ELSE, 0);
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
            $listener->enterIfStatement($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitIfStatement($this);
        }
    }
}

