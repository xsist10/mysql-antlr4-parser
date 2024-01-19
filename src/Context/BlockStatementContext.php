<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class BlockStatementContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_blockStatement;
    }

    public function BEGIN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BEGIN, 0);
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
     * @return array<DeclareVariableContext>|DeclareVariableContext|null
     */
    public function declareVariable(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(DeclareVariableContext::class);
        }

        return $this->getTypedRuleContext(DeclareVariableContext::class, $index);
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
     * @return array<DeclareConditionContext>|DeclareConditionContext|null
     */
    public function declareCondition(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(DeclareConditionContext::class);
        }

        return $this->getTypedRuleContext(DeclareConditionContext::class, $index);
    }

    /**
     * @return array<DeclareCursorContext>|DeclareCursorContext|null
     */
    public function declareCursor(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(DeclareCursorContext::class);
        }

        return $this->getTypedRuleContext(DeclareCursorContext::class, $index);
    }

    /**
     * @return array<DeclareHandlerContext>|DeclareHandlerContext|null
     */
    public function declareHandler(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(DeclareHandlerContext::class);
        }

        return $this->getTypedRuleContext(DeclareHandlerContext::class, $index);
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
            $listener->enterBlockStatement($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitBlockStatement($this);
        }
    }
}

