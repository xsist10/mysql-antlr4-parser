<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class GetFormatFunctionCallContext extends SpecificFunctionContext
{
    /**
     * @var Token|null $datetimeFormat
     */
    public $datetimeFormat;

    public function __construct(SpecificFunctionContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function GET_FORMAT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::GET_FORMAT, 0);
    }

    public function LR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LR_BRACKET, 0);
    }

    public function COMMA(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::COMMA, 0);
    }

    public function stringLiteral(): ?StringLiteralContext
    {
        return $this->getTypedRuleContext(StringLiteralContext::class, 0);
    }

    public function RR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RR_BRACKET, 0);
    }

    public function DATE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DATE, 0);
    }

    public function TIME(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TIME, 0);
    }

    public function DATETIME(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DATETIME, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterGetFormatFunctionCall($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitGetFormatFunctionCall($this);
        }
    }
}

