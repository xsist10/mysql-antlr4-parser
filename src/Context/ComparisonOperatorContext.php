<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class ComparisonOperatorContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_comparisonOperator;
    }

    public function EQUAL_SYMBOL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::EQUAL_SYMBOL, 0);
    }

    public function GREATER_SYMBOL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::GREATER_SYMBOL, 0);
    }

    public function LESS_SYMBOL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LESS_SYMBOL, 0);
    }

    public function EXCLAMATION_SYMBOL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::EXCLAMATION_SYMBOL, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterComparisonOperator($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitComparisonOperator($this);
        }
    }
}

