<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

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

