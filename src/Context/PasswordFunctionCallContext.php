<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class PasswordFunctionCallContext extends FunctionCallContext
{
    public function __construct(FunctionCallContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function passwordFunctionClause(): ?PasswordFunctionClauseContext
    {
        return $this->getTypedRuleContext(PasswordFunctionClauseContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterPasswordFunctionCall($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitPasswordFunctionCall($this);
        }
    }
}

