<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class ShutdownStatementContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_shutdownStatement;
    }

    public function SHUTDOWN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SHUTDOWN, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterShutdownStatement($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitShutdownStatement($this);
        }
    }
}

