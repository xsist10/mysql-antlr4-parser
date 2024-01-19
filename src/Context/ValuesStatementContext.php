<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class ValuesStatementContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_valuesStatement;
    }

    public function VALUES(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::VALUES, 0);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function LR_BRACKET(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::LR_BRACKET);
        }

        return $this->getToken(MySqlParser::LR_BRACKET, $index);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function RR_BRACKET(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::RR_BRACKET);
        }

        return $this->getToken(MySqlParser::RR_BRACKET, $index);
    }

    /**
     * @return array<ExpressionsWithDefaultsContext>|ExpressionsWithDefaultsContext|null
     */
    public function expressionsWithDefaults(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(ExpressionsWithDefaultsContext::class);
        }

        return $this->getTypedRuleContext(ExpressionsWithDefaultsContext::class, $index);
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
            $listener->enterValuesStatement($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitValuesStatement($this);
        }
    }
}

