<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class ShowCommonEntityContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_showCommonEntity;
    }

    public function CHARACTER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CHARACTER, 0);
    }

    public function SET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SET, 0);
    }

    public function COLLATION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::COLLATION, 0);
    }

    public function DATABASES(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DATABASES, 0);
    }

    public function SCHEMAS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SCHEMAS, 0);
    }

    public function FUNCTION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FUNCTION, 0);
    }

    public function STATUS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STATUS, 0);
    }

    public function PROCEDURE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PROCEDURE, 0);
    }

    public function VARIABLES(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::VARIABLES, 0);
    }

    public function GLOBAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::GLOBAL, 0);
    }

    public function SESSION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SESSION, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterShowCommonEntity($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitShowCommonEntity($this);
        }
    }
}

