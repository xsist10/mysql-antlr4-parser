<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class SetAutocommitContext extends SetStatementContext
{
    public function __construct(SetStatementContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function setAutocommitStatement(): ?SetAutocommitStatementContext
    {
        return $this->getTypedRuleContext(SetAutocommitStatementContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterSetAutocommit($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitSetAutocommit($this);
        }
    }
}

