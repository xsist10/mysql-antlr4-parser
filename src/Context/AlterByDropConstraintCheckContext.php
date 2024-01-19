<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class AlterByDropConstraintCheckContext extends AlterSpecificationContext
{
    public function __construct(AlterSpecificationContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function DROP(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DROP, 0);
    }

    public function uid(): ?UidContext
    {
        return $this->getTypedRuleContext(UidContext::class, 0);
    }

    public function CONSTRAINT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CONSTRAINT, 0);
    }

    public function CHECK(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CHECK, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterAlterByDropConstraintCheck($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitAlterByDropConstraintCheck($this);
        }
    }
}

