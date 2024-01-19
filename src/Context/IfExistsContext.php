<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class IfExistsContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_ifExists;
    }

    public function IF(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::IF, 0);
    }

    public function EXISTS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::EXISTS, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterIfExists($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitIfExists($this);
        }
    }
}

