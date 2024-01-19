<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class CharsetNameContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_charsetName;
    }

    public function BINARY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BINARY, 0);
    }

    public function charsetNameBase(): ?CharsetNameBaseContext
    {
        return $this->getTypedRuleContext(CharsetNameBaseContext::class, 0);
    }

    public function STRING_LITERAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STRING_LITERAL, 0);
    }

    public function CHARSET_REVERSE_QOUTE_STRING(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CHARSET_REVERSE_QOUTE_STRING, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterCharsetName($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitCharsetName($this);
        }
    }
}

