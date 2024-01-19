<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class TableOptionInsertMethodContext extends TableOptionContext
{
    /**
     * @var Token|null $insertMethod
     */
    public $insertMethod;

    public function __construct(TableOptionContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function INSERT_METHOD(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INSERT_METHOD, 0);
    }

    public function NO(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::NO, 0);
    }

    public function FIRST(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FIRST, 0);
    }

    public function LAST(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LAST, 0);
    }

    public function EQUAL_SYMBOL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::EQUAL_SYMBOL, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterTableOptionInsertMethod($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitTableOptionInsertMethod($this);
        }
    }
}

