<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class IndexDeclarationContext extends CreateDefinitionContext
{
    public function __construct(CreateDefinitionContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function indexColumnDefinition(): ?IndexColumnDefinitionContext
    {
        return $this->getTypedRuleContext(IndexColumnDefinitionContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterIndexDeclaration($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitIndexDeclaration($this);
        }
    }
}

