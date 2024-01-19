<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class FunctionArgsContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_functionArgs;
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
     * @return array<FullColumnNameContext>|FullColumnNameContext|null
     */
    public function fullColumnName(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(FullColumnNameContext::class);
        }

        return $this->getTypedRuleContext(FullColumnNameContext::class, $index);
    }

    /**
     * @return array<FunctionCallContext>|FunctionCallContext|null
     */
    public function functionCall(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(FunctionCallContext::class);
        }

        return $this->getTypedRuleContext(FunctionCallContext::class, $index);
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
            $listener->enterFunctionArgs($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitFunctionArgs($this);
        }
    }
}

