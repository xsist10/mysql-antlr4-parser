<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class ScalarFunctionCallContext extends FunctionCallContext
{
    public function __construct(FunctionCallContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function scalarFunctionName(): ?ScalarFunctionNameContext
    {
        return $this->getTypedRuleContext(ScalarFunctionNameContext::class, 0);
    }

    public function LR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LR_BRACKET, 0);
    }

    public function RR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RR_BRACKET, 0);
    }

    public function functionArgs(): ?FunctionArgsContext
    {
        return $this->getTypedRuleContext(FunctionArgsContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterScalarFunctionCall($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitScalarFunctionCall($this);
        }
    }
}

