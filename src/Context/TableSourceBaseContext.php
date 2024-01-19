<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class TableSourceBaseContext extends TableSourceContext
{
    public function __construct(TableSourceContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function tableSourceItem(): ?TableSourceItemContext
    {
        return $this->getTypedRuleContext(TableSourceItemContext::class, 0);
    }

    /**
     * @return array<JoinPartContext>|JoinPartContext|null
     */
    public function joinPart(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(JoinPartContext::class);
        }

        return $this->getTypedRuleContext(JoinPartContext::class, $index);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterTableSourceBase($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitTableSourceBase($this);
        }
    }
}

