<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class JsonValueFunctionCallContext extends SpecificFunctionContext
{
    public function __construct(SpecificFunctionContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function JSON_VALUE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::JSON_VALUE, 0);
    }

    public function LR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LR_BRACKET, 0);
    }

    /**
     * @return array<ExpressionContext>|ExpressionContext|null
     */
    public function expression(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(ExpressionContext::class);
        }

        return $this->getTypedRuleContext(ExpressionContext::class, $index);
    }

    public function COMMA(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::COMMA, 0);
    }

    public function RR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RR_BRACKET, 0);
    }

    public function RETURNING(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RETURNING, 0);
    }

    public function convertedDataType(): ?ConvertedDataTypeContext
    {
        return $this->getTypedRuleContext(ConvertedDataTypeContext::class, 0);
    }

    public function jsonOnEmpty(): ?JsonOnEmptyContext
    {
        return $this->getTypedRuleContext(JsonOnEmptyContext::class, 0);
    }

    public function jsonOnError(): ?JsonOnErrorContext
    {
        return $this->getTypedRuleContext(JsonOnErrorContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterJsonValueFunctionCall($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitJsonValueFunctionCall($this);
        }
    }
}

