<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class TableOptionDelayContext extends TableOptionContext
{
    /**
     * @var Token|null $boolValue
     */
    public $boolValue;

    public function __construct(TableOptionContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function DELAY_KEY_WRITE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DELAY_KEY_WRITE, 0);
    }

    public function ZERO_DECIMAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ZERO_DECIMAL, 0);
    }

    public function ONE_DECIMAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ONE_DECIMAL, 0);
    }

    public function EQUAL_SYMBOL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::EQUAL_SYMBOL, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterTableOptionDelay($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitTableOptionDelay($this);
        }
    }
}

