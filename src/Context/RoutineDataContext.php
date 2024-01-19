<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class RoutineDataContext extends RoutineOptionContext
{
    public function __construct(RoutineOptionContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function CONTAINS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CONTAINS, 0);
    }

    public function SQL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SQL, 0);
    }

    public function NO(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::NO, 0);
    }

    public function READS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::READS, 0);
    }

    public function DATA(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DATA, 0);
    }

    public function MODIFIES(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MODIFIES, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterRoutineData($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitRoutineData($this);
        }
    }
}

