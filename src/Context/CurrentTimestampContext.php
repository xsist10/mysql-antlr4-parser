<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class CurrentTimestampContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_currentTimestamp;
    }

    public function NOW(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::NOW, 0);
    }

    public function LR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LR_BRACKET, 0);
    }

    public function RR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RR_BRACKET, 0);
    }

    public function CURRENT_TIMESTAMP(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CURRENT_TIMESTAMP, 0);
    }

    public function LOCALTIME(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LOCALTIME, 0);
    }

    public function LOCALTIMESTAMP(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LOCALTIMESTAMP, 0);
    }

    public function decimalLiteral(): ?DecimalLiteralContext
    {
        return $this->getTypedRuleContext(DecimalLiteralContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterCurrentTimestamp($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitCurrentTimestamp($this);
        }
    }
}

