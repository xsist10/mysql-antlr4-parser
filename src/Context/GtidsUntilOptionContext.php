<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class GtidsUntilOptionContext extends UntilOptionContext
{
    /**
     * @var Token|null $gtids
     */
    public $gtids;

    public function __construct(UntilOptionContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function EQUAL_SYMBOL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::EQUAL_SYMBOL, 0);
    }

    public function gtuidSet(): ?GtuidSetContext
    {
        return $this->getTypedRuleContext(GtuidSetContext::class, 0);
    }

    public function SQL_BEFORE_GTIDS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SQL_BEFORE_GTIDS, 0);
    }

    public function SQL_AFTER_GTIDS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SQL_AFTER_GTIDS, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterGtidsUntilOption($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitGtidsUntilOption($this);
        }
    }
}

