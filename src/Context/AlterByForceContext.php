<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class AlterByForceContext extends AlterSpecificationContext
{
    public function __construct(AlterSpecificationContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function FORCE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FORCE, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterAlterByForce($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitAlterByForce($this);
        }
    }
}

