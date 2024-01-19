<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class SqlGapsUntilOptionContext extends UntilOptionContext
{
    public function __construct(UntilOptionContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function SQL_AFTER_MTS_GAPS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SQL_AFTER_MTS_GAPS, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterSqlGapsUntilOption($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitSqlGapsUntilOption($this);
        }
    }
}

