<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class SelectFunctionElementContext extends SelectElementContext
{
    public function __construct(SelectElementContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function functionCall(): ?FunctionCallContext
    {
        return $this->getTypedRuleContext(FunctionCallContext::class, 0);
    }

    public function uid(): ?UidContext
    {
        return $this->getTypedRuleContext(UidContext::class, 0);
    }

    public function AS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::AS, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterSelectFunctionElement($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitSelectFunctionElement($this);
        }
    }
}

