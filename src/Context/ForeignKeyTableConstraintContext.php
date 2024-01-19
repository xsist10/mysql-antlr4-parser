<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class ForeignKeyTableConstraintContext extends TableConstraintContext
{
    /**
     * @var UidContext|null $name
     */
    public $name;

    /**
     * @var UidContext|null $index
     */
    public $index;

    public function __construct(TableConstraintContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function FOREIGN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FOREIGN, 0);
    }

    public function KEY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::KEY, 0);
    }

    public function indexColumnNames(): ?IndexColumnNamesContext
    {
        return $this->getTypedRuleContext(IndexColumnNamesContext::class, 0);
    }

    public function referenceDefinition(): ?ReferenceDefinitionContext
    {
        return $this->getTypedRuleContext(ReferenceDefinitionContext::class, 0);
    }

    public function CONSTRAINT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CONSTRAINT, 0);
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

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterForeignKeyTableConstraint($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitForeignKeyTableConstraint($this);
        }
    }
}

