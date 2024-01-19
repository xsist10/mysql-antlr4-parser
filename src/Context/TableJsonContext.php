<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class TableJsonContext extends TableSourceContext
{
    public function __construct(TableSourceContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function jsonTable(): ?JsonTableContext
    {
        return $this->getTypedRuleContext(JsonTableContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterTableJson($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitTableJson($this);
        }
    }
}

