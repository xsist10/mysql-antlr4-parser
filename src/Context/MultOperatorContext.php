<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class MultOperatorContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_multOperator;
    }

    public function STAR(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STAR, 0);
    }

    public function DIVIDE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DIVIDE, 0);
    }

    public function MODULE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MODULE, 0);
    }

    public function DIV(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DIV, 0);
    }

    public function MOD(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MOD, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterMultOperator($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitMultOperator($this);
        }
    }
}

