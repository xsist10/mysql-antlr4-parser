<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class UnionParenthesisContext extends ParserRuleContext
{
    /**
     * @var Token|null $unionType
     */
    public $unionType;

    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_unionParenthesis;
    }

    public function UNION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::UNION, 0);
    }

    public function queryExpressionNointo(): ?QueryExpressionNointoContext
    {
        return $this->getTypedRuleContext(QueryExpressionNointoContext::class, 0);
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
            $listener->enterUnionParenthesis($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitUnionParenthesis($this);
        }
    }
}

