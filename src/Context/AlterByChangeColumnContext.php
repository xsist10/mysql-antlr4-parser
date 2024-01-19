<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class AlterByChangeColumnContext extends AlterSpecificationContext
{
    /**
     * @var UidContext|null $oldColumn
     */
    public $oldColumn;

    /**
     * @var UidContext|null $newColumn
     */
    public $newColumn;

    /**
     * @var UidContext|null $afterColumn
     */
    public $afterColumn;

    public function __construct(AlterSpecificationContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function CHANGE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CHANGE, 0);
    }

    public function columnDefinition(): ?ColumnDefinitionContext
    {
        return $this->getTypedRuleContext(ColumnDefinitionContext::class, 0);
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
            $listener->enterAlterByChangeColumn($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitAlterByChangeColumn($this);
        }
    }
}

