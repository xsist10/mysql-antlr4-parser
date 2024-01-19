<?php

declare(strict_types=1);


namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class BitOperatorContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_bitOperator;
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function LESS_SYMBOL(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::LESS_SYMBOL);
        }

        return $this->getToken(MySqlParser::LESS_SYMBOL, $index);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function GREATER_SYMBOL(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::GREATER_SYMBOL);
        }

        return $this->getToken(MySqlParser::GREATER_SYMBOL, $index);
    }

    public function BIT_AND_OP(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BIT_AND_OP, 0);
    }

    public function BIT_XOR_OP(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BIT_XOR_OP, 0);
    }

    public function BIT_OR_OP(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BIT_OR_OP, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterBitOperator($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitBitOperator($this);
        }
    }
}
