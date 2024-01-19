<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class DataTypeFunctionCallContext extends SpecificFunctionContext
{
    /**
     * @var Token|null $separator
     */
    public $separator;

    public function __construct(SpecificFunctionContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function CONVERT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CONVERT, 0);
    }

    public function LR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LR_BRACKET, 0);
    }

    public function expression(): ?ExpressionContext
    {
        return $this->getTypedRuleContext(ExpressionContext::class, 0);
    }

    public function convertedDataType(): ?ConvertedDataTypeContext
    {
        return $this->getTypedRuleContext(ConvertedDataTypeContext::class, 0);
    }

    public function RR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RR_BRACKET, 0);
    }

    public function COMMA(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::COMMA, 0);
    }

    public function USING(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::USING, 0);
    }

    public function charsetName(): ?CharsetNameContext
    {
        return $this->getTypedRuleContext(CharsetNameContext::class, 0);
    }

    public function CAST(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CAST, 0);
    }

    public function AS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::AS, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterDataTypeFunctionCall($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitDataTypeFunctionCall($this);
        }
    }
}

