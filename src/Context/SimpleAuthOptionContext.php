<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class SimpleAuthOptionContext extends UserAuthOptionContext
{
    public function __construct(UserAuthOptionContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function userName(): ?UserNameContext
    {
        return $this->getTypedRuleContext(UserNameContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterSimpleAuthOption($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitSimpleAuthOption($this);
        }
    }
}

