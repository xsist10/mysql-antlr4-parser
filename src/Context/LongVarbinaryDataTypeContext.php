<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class LongVarbinaryDataTypeContext extends DataTypeContext
{
    public function __construct(DataTypeContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function LONG(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LONG, 0);
    }

    public function VARBINARY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::VARBINARY, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterLongVarbinaryDataType($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitLongVarbinaryDataType($this);
        }
    }
}

