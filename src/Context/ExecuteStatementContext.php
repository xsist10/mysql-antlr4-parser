<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class ExecuteStatementContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_executeStatement;
    }

    public function EXECUTE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::EXECUTE, 0);
    }

    public function uid(): ?UidContext
    {
        return $this->getTypedRuleContext(UidContext::class, 0);
    }

    public function USING(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::USING, 0);
    }

    public function userVariables(): ?UserVariablesContext
    {
        return $this->getTypedRuleContext(UserVariablesContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterExecuteStatement($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitExecuteStatement($this);
        }
    }
}
