<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class UniqueKeyColumnConstraintContext extends ColumnConstraintContext
{
    public function __construct(ColumnConstraintContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function UNIQUE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::UNIQUE, 0);
    }

    public function KEY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::KEY, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterUniqueKeyColumnConstraint($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitUniqueKeyColumnConstraint($this);
        }
    }
}

