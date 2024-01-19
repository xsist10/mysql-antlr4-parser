<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class XuidStringIdContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_xuidStringId;
    }

    public function STRING_LITERAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STRING_LITERAL, 0);
    }

    public function BIT_STRING(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BIT_STRING, 0);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function HEXADECIMAL_LITERAL(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::HEXADECIMAL_LITERAL);
        }

        return $this->getToken(MySqlParser::HEXADECIMAL_LITERAL, $index);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterXuidStringId($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitXuidStringId($this);
        }
    }
}

