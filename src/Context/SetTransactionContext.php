<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class SetTransactionContext extends SetStatementContext
{
    public function __construct(SetStatementContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function setTransactionStatement(): ?SetTransactionStatementContext
    {
        return $this->getTypedRuleContext(SetTransactionStatementContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterSetTransaction($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitSetTransaction($this);
        }
    }
}

