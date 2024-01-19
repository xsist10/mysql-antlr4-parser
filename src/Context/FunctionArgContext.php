<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class FunctionArgContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_functionArg;
    }

    public function constant(): ?ConstantContext
    {
        return $this->getTypedRuleContext(ConstantContext::class, 0);
    }

    public function fullColumnName(): ?FullColumnNameContext
    {
        return $this->getTypedRuleContext(FullColumnNameContext::class, 0);
    }

    public function functionCall(): ?FunctionCallContext
    {
        return $this->getTypedRuleContext(FunctionCallContext::class, 0);
    }

    public function expression(): ?ExpressionContext
    {
        return $this->getTypedRuleContext(ExpressionContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterFunctionArg($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitFunctionArg($this);
        }
    }
}

