<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class SimpleFunctionCallContext extends SpecificFunctionContext
{
    public function __construct(SpecificFunctionContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function CURRENT_DATE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CURRENT_DATE, 0);
    }

    public function CURRENT_TIME(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CURRENT_TIME, 0);
    }

    public function CURRENT_TIMESTAMP(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CURRENT_TIMESTAMP, 0);
    }

    public function LOCALTIME(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LOCALTIME, 0);
    }

    public function UTC_TIMESTAMP(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::UTC_TIMESTAMP, 0);
    }

    public function SCHEMA(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SCHEMA, 0);
    }

    public function LR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LR_BRACKET, 0);
    }

    public function RR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RR_BRACKET, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterSimpleFunctionCall($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitSimpleFunctionCall($this);
        }
    }
}

