<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class ColumnDeclarationContext extends CreateDefinitionContext
{
    public function __construct(CreateDefinitionContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function fullColumnName(): ?FullColumnNameContext
    {
        return $this->getTypedRuleContext(FullColumnNameContext::class, 0);
    }

    public function columnDefinition(): ?ColumnDefinitionContext
    {
        return $this->getTypedRuleContext(ColumnDefinitionContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterColumnDeclaration($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitColumnDeclaration($this);
        }
    }
}

