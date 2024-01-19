<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class RoutineSecurityContext extends RoutineOptionContext
{
    /**
     * @var Token|null $context
     */
    public $context;

    public function __construct(RoutineOptionContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function SQL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SQL, 0);
    }

    public function SECURITY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SECURITY, 0);
    }

    public function DEFINER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DEFINER, 0);
    }

    public function INVOKER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INVOKER, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterRoutineSecurity($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitRoutineSecurity($this);
        }
    }
}

