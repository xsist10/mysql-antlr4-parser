<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class SelectIntoExpressionContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_selectIntoExpression;
    }

    public function copyFrom(ParserRuleContext $context): void
    {
        parent::copyFrom($context);

    }
}
