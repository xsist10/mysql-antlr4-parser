<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class SetNewValueInsideTriggerContext extends SetStatementContext
{
    public function __construct(SetStatementContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function SET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SET, 0);
    }

    /**
     * @return array<FullIdContext>|FullIdContext|null
     */
    public function fullId(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(FullIdContext::class);
        }

        return $this->getTypedRuleContext(FullIdContext::class, $index);
    }

    /**
     * @return array<ExpressionContext>|ExpressionContext|null
     */
    public function expression(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(ExpressionContext::class);
        }

        return $this->getTypedRuleContext(ExpressionContext::class, $index);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function EQUAL_SYMBOL(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::EQUAL_SYMBOL);
        }

        return $this->getToken(MySqlParser::EQUAL_SYMBOL, $index);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function VAR_ASSIGN(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::VAR_ASSIGN);
        }

        return $this->getToken(MySqlParser::VAR_ASSIGN, $index);
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
            $listener->enterSetNewValueInsideTrigger($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitSetNewValueInsideTrigger($this);
        }
    }
}

