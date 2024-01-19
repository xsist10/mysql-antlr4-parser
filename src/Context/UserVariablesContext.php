<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class UserVariablesContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_userVariables;
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function LOCAL_ID(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::LOCAL_ID);
        }

        return $this->getToken(MySqlParser::LOCAL_ID, $index);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function COMMA(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::COMMA);
        }

        return $this->getToken(MySqlParser::COMMA, $index);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterUserVariables($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitUserVariables($this);
        }
    }
}

