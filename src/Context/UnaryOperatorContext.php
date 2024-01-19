<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class UnaryOperatorContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_unaryOperator;
    }

    public function EXCLAMATION_SYMBOL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::EXCLAMATION_SYMBOL, 0);
    }

    public function BIT_NOT_OP(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BIT_NOT_OP, 0);
    }

    public function PLUS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PLUS, 0);
    }

    public function MINUS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MINUS, 0);
    }

    public function NOT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::NOT, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterUnaryOperator($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitUnaryOperator($this);
        }
    }
}

