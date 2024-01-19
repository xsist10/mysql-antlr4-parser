<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class SetTransactionContext extends SetStatementContext
{
    public function __construct(SetStatementContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function setTransactionStatement(): ?SetTransactionStatementContext
    {
        return $this->getTypedRuleContext(SetTransactionStatementContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterSetTransaction($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitSetTransaction($this);
        }
    }
}

