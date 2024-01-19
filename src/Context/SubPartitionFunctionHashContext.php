<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class SubPartitionFunctionHashContext extends SubpartitionFunctionDefinitionContext
{
    public function __construct(SubpartitionFunctionDefinitionContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function HASH(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::HASH, 0);
    }

    public function LR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LR_BRACKET, 0);
    }

    public function expression(): ?ExpressionContext
    {
        return $this->getTypedRuleContext(ExpressionContext::class, 0);
    }

    public function RR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RR_BRACKET, 0);
    }

    public function LINEAR(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LINEAR, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterSubPartitionFunctionHash($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitSubPartitionFunctionHash($this);
        }
    }
}
