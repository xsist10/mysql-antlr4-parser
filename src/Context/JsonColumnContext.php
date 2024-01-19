<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class JsonColumnContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_jsonColumn;
    }

    public function fullColumnName(): ?FullColumnNameContext
    {
        return $this->getTypedRuleContext(FullColumnNameContext::class, 0);
    }

    public function FOR(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FOR, 0);
    }

    public function ORDINALITY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ORDINALITY, 0);
    }

    public function dataType(): ?DataTypeContext
    {
        return $this->getTypedRuleContext(DataTypeContext::class, 0);
    }

    public function PATH(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PATH, 0);
    }

    public function STRING_LITERAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STRING_LITERAL, 0);
    }

    public function EXISTS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::EXISTS, 0);
    }

    public function jsonOnEmpty(): ?JsonOnEmptyContext
    {
        return $this->getTypedRuleContext(JsonOnEmptyContext::class, 0);
    }

    public function jsonOnError(): ?JsonOnErrorContext
    {
        return $this->getTypedRuleContext(JsonOnErrorContext::class, 0);
    }

    public function NESTED(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::NESTED, 0);
    }

    public function COLUMNS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::COLUMNS, 0);
    }

    public function LR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LR_BRACKET, 0);
    }

    public function jsonColumnList(): ?JsonColumnListContext
    {
        return $this->getTypedRuleContext(JsonColumnListContext::class, 0);
    }

    public function RR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RR_BRACKET, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterJsonColumn($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitJsonColumn($this);
        }
    }
}

