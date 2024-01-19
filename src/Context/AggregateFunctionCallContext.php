<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class AggregateFunctionCallContext extends FunctionCallContext
{
    public function __construct(FunctionCallContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function aggregateWindowedFunction(): ?AggregateWindowedFunctionContext
    {
        return $this->getTypedRuleContext(AggregateWindowedFunctionContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterAggregateFunctionCall($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitAggregateFunctionCall($this);
        }
    }
}

