<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class ConstantsContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_constants;
    }

    /**
     * @return array<ConstantContext>|ConstantContext|null
     */
    public function constant(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(ConstantContext::class);
        }

        return $this->getTypedRuleContext(ConstantContext::class, $index);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function COMMA(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::COMMA);
        }

        return $this->getToken(MySqlParser::COMMA, $index);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterConstants($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitConstants($this);
        }
    }
}

