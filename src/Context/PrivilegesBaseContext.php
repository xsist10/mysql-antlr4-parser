<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class PrivilegesBaseContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_privilegesBase;
    }

    public function TABLES(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TABLES, 0);
    }

    public function ROUTINE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ROUTINE, 0);
    }

    public function EXECUTE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::EXECUTE, 0);
    }

    public function FILE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FILE, 0);
    }

    public function PROCESS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PROCESS, 0);
    }

    public function RELOAD(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RELOAD, 0);
    }

    public function SHUTDOWN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SHUTDOWN, 0);
    }

    public function SUPER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SUPER, 0);
    }

    public function PRIVILEGES(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PRIVILEGES, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterPrivilegesBase($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitPrivilegesBase($this);
        }
    }
}

