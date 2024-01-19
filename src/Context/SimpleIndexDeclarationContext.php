<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class SimpleIndexDeclarationContext extends IndexColumnDefinitionContext
{
    /**
     * @var Token|null $indexFormat
     */
    public $indexFormat;

    public function __construct(IndexColumnDefinitionContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function indexColumnNames(): ?IndexColumnNamesContext
    {
        return $this->getTypedRuleContext(IndexColumnNamesContext::class, 0);
    }

    public function INDEX(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INDEX, 0);
    }

    public function KEY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::KEY, 0);
    }

    public function uid(): ?UidContext
    {
        return $this->getTypedRuleContext(UidContext::class, 0);
    }

    public function indexType(): ?IndexTypeContext
    {
        return $this->getTypedRuleContext(IndexTypeContext::class, 0);
    }

    /**
     * @return array<IndexOptionContext>|IndexOptionContext|null
     */
    public function indexOption(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(IndexOptionContext::class);
        }

        return $this->getTypedRuleContext(IndexOptionContext::class, $index);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterSimpleIndexDeclaration($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitSimpleIndexDeclaration($this);
        }
    }
}

