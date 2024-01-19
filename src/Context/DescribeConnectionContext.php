<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class DescribeConnectionContext extends DescribeObjectClauseContext
{
    public function __construct(DescribeObjectClauseContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function FOR(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FOR, 0);
    }

    public function CONNECTION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CONNECTION, 0);
    }

    public function uid(): ?UidContext
    {
        return $this->getTypedRuleContext(UidContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterDescribeConnection($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitDescribeConnection($this);
        }
    }
}

