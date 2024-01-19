<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class CurrentUserContext extends SpecificFunctionContext
{
    public function __construct(SpecificFunctionContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function currentUserExpression(): ?CurrentUserExpressionContext
    {
        return $this->getTypedRuleContext(CurrentUserExpressionContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterCurrentUser($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitCurrentUser($this);
        }
    }
}

