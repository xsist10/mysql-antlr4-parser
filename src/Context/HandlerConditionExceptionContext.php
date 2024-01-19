<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class HandlerConditionExceptionContext extends HandlerConditionValueContext
{
    public function __construct(HandlerConditionValueContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function SQLEXCEPTION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SQLEXCEPTION, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterHandlerConditionException($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitHandlerConditionException($this);
        }
    }
}

