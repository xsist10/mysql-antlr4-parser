<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class DefiniteTablePrivLevelContext extends PrivilegeLevelContext
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

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterDefiniteTablePrivLevel($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitDefiniteTablePrivLevel($this);
        }
    }
}

