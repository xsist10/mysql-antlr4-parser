<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class AlterByDisableKeysContext extends AlterSpecificationContext
{
    public function __construct(AlterSpecificationContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function DISABLE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DISABLE, 0);
    }

    public function KEYS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::KEYS, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterAlterByDisableKeys($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitAlterByDisableKeys($this);
        }
    }
}

