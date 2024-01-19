<?php

declare(strict_types=1);


namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use MySqlAntl4\MySqlParser;

class CreateTableContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_createTable;
    }

    public function copyFrom(ParserRuleContext $context): void
    {
        parent::copyFrom($context);

    }
}
