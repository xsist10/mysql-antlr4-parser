<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class NonAggregateFunctionCallContext extends FunctionCallContext
{
    public function __construct(FunctionCallContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function nonAggregateWindowedFunction(): ?NonAggregateWindowedFunctionContext
    {
        return $this->getTypedRuleContext(NonAggregateWindowedFunctionContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterNonAggregateFunctionCall($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitNonAggregateFunctionCall($this);
        }
    }
}

