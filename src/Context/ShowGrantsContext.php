<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class ShowGrantsContext extends ShowStatementContext
{
    public function __construct(ShowStatementContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function SHOW(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SHOW, 0);
    }

    public function GRANTS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::GRANTS, 0);
    }

    public function FOR(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FOR, 0);
    }

    public function userName(): ?UserNameContext
    {
        return $this->getTypedRuleContext(UserNameContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterShowGrants($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitShowGrants($this);
        }
    }
}

