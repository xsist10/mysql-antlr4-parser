<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class AlterByModifyColumnContext extends AlterSpecificationContext
{
    public function __construct(AlterSpecificationContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function MODIFY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MODIFY, 0);
    }

    /**
     * @return array<UidContext>|UidContext|null
     */
    public function uid(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(UidContext::class);
        }

        return $this->getTypedRuleContext(UidContext::class, $index);
    }

    public function columnDefinition(): ?ColumnDefinitionContext
    {
        return $this->getTypedRuleContext(ColumnDefinitionContext::class, 0);
    }

    public function COLUMN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::COLUMN, 0);
    }

    public function FIRST(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FIRST, 0);
    }

    public function AFTER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::AFTER, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterAlterByModifyColumn($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitAlterByModifyColumn($this);
        }
    }
}

