<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class VariableAssignExpressionAtomContext extends ExpressionAtomContext
{
    public function __construct(ExpressionAtomContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function LOCAL_ID(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LOCAL_ID, 0);
    }

    public function VAR_ASSIGN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::VAR_ASSIGN, 0);
    }

    public function expressionAtom(): ?ExpressionAtomContext
    {
        return $this->getTypedRuleContext(ExpressionAtomContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterVariableAssignExpressionAtom($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitVariableAssignExpressionAtom($this);
        }
    }
}

