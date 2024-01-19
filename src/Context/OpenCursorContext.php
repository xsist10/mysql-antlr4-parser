<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class OpenCursorContext extends CursorStatementContext
{
    public function __construct(CursorStatementContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function OPEN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::OPEN, 0);
    }

    public function uid(): ?UidContext
    {
        return $this->getTypedRuleContext(UidContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterOpenCursor($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitOpenCursor($this);
        }
    }
}

