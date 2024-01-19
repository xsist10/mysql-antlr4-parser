<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class JsonOperatorContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_jsonOperator;
    }

    public function MINUS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MINUS, 0);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function GREATER_SYMBOL(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::GREATER_SYMBOL);
        }

        return $this->getToken(MySqlParser::GREATER_SYMBOL, $index);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterJsonOperator($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitJsonOperator($this);
        }
    }
}

