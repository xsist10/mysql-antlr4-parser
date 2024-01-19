<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class ConstraintDeclarationContext extends CreateDefinitionContext
{
    public function __construct(CreateDefinitionContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function tableConstraint(): ?TableConstraintContext
    {
        return $this->getTypedRuleContext(TableConstraintContext::class, 0);
    }

    public function NOT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::NOT, 0);
    }

    public function ENFORCED(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ENFORCED, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterConstraintDeclaration($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitConstraintDeclaration($this);
        }
    }
}

