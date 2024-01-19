<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class SerialDefaultColumnConstraintContext extends ColumnConstraintContext
{
    public function __construct(ColumnConstraintContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function SERIAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SERIAL, 0);
    }

    public function DEFAULT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DEFAULT, 0);
    }

    public function VALUE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::VALUE, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterSerialDefaultColumnConstraint($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitSerialDefaultColumnConstraint($this);
        }
    }
}

