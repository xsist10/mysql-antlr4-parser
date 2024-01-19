<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class RoutineBehaviorContext extends RoutineOptionContext
{
    public function __construct(RoutineOptionContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function DETERMINISTIC(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DETERMINISTIC, 0);
    }

    public function NOT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::NOT, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterRoutineBehavior($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitRoutineBehavior($this);
        }
    }
}

