<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class DefiniteFullTablePrivLevel2Context extends PrivilegeLevelContext
{
    public function __construct(PrivilegeLevelContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function uid(): ?UidContext
    {
        return $this->getTypedRuleContext(UidContext::class, 0);
    }

    public function dottedId(): ?DottedIdContext
    {
        return $this->getTypedRuleContext(DottedIdContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterDefiniteFullTablePrivLevel2($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitDefiniteFullTablePrivLevel2($this);
        }
    }
}

