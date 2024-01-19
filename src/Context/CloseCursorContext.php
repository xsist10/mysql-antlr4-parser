<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class CloseCursorContext extends CursorStatementContext
{
    public function __construct(CursorStatementContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function CLOSE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CLOSE, 0);
    }

    public function uid(): ?UidContext
    {
        return $this->getTypedRuleContext(UidContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterCloseCursor($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitCloseCursor($this);
        }
    }
}

