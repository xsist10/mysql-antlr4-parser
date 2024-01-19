<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class LogicalOperatorContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_logicalOperator;
    }

    public function AND(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::AND, 0);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function BIT_AND_OP(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::BIT_AND_OP);
        }

        return $this->getToken(MySqlParser::BIT_AND_OP, $index);
    }

    public function XOR(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::XOR, 0);
    }

    public function OR(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::OR, 0);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function BIT_OR_OP(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::BIT_OR_OP);
        }

        return $this->getToken(MySqlParser::BIT_OR_OP, $index);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterLogicalOperator($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitLogicalOperator($this);
        }
    }
}

