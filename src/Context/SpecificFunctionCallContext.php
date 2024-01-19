<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class SpecificFunctionCallContext extends FunctionCallContext
{
    public function __construct(FunctionCallContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function specificFunction(): ?SpecificFunctionContext
    {
        return $this->getTypedRuleContext(SpecificFunctionContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterSpecificFunctionCall($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitSpecificFunctionCall($this);
        }
    }
}

