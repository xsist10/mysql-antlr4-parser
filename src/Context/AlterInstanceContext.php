<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class AlterInstanceContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_alterInstance;
    }

    public function ALTER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ALTER, 0);
    }

    public function INSTANCE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INSTANCE, 0);
    }

    public function ROTATE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ROTATE, 0);
    }

    public function INNODB(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INNODB, 0);
    }

    public function MASTER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MASTER, 0);
    }

    public function KEY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::KEY, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterAlterInstance($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitAlterInstance($this);
        }
    }
}

