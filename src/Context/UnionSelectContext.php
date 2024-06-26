<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class UnionSelectContext extends SelectStatementContext
{
    /**
     * @var Token|null $unionType
     */
    public $unionType;

    public function __construct(SelectStatementContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function querySpecificationNointo(): ?QuerySpecificationNointoContext
    {
        return $this->getTypedRuleContext(QuerySpecificationNointoContext::class, 0);
    }

    public function queryExpressionNointo(): ?QueryExpressionNointoContext
    {
        return $this->getTypedRuleContext(QueryExpressionNointoContext::class, 0);
    }

    /**
     * @return array<UnionStatementContext>|UnionStatementContext|null
     */
    public function unionStatement(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(UnionStatementContext::class);
        }

        return $this->getTypedRuleContext(UnionStatementContext::class, $index);
    }

    public function UNION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::UNION, 0);
    }

    public function orderByClause(): ?OrderByClauseContext
    {
        return $this->getTypedRuleContext(OrderByClauseContext::class, 0);
    }

    public function limitClause(): ?LimitClauseContext
    {
        return $this->getTypedRuleContext(LimitClauseContext::class, 0);
    }

    public function lockClause(): ?LockClauseContext
    {
        return $this->getTypedRuleContext(LockClauseContext::class, 0);
    }

    public function querySpecification(): ?QuerySpecificationContext
    {
        return $this->getTypedRuleContext(QuerySpecificationContext::class, 0);
    }

    public function queryExpression(): ?QueryExpressionContext
    {
        return $this->getTypedRuleContext(QueryExpressionContext::class, 0);
    }

    public function ALL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ALL, 0);
    }

    public function DISTINCT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DISTINCT, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterUnionSelect($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitUnionSelect($this);
        }
    }
}

