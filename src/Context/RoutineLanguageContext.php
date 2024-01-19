<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class RoutineLanguageContext extends RoutineOptionContext
{
    public function __construct(RoutineOptionContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function LANGUAGE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LANGUAGE, 0);
    }

    public function SQL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SQL, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterRoutineLanguage($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitRoutineLanguage($this);
        }
    }
}

