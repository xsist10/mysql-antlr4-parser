<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class HandlerConditionWarningContext extends HandlerConditionValueContext
{
    public function __construct(HandlerConditionValueContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function SQLWARNING(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SQLWARNING, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterHandlerConditionWarning($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitHandlerConditionWarning($this);
        }
    }
}

