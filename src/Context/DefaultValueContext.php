<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class DefaultValueContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_defaultValue;
    }

    public function NULL_LITERAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::NULL_LITERAL, 0);
    }

    public function CAST(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CAST, 0);
    }

    public function LR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LR_BRACKET, 0);
    }

    public function expression(): ?ExpressionContext
    {
        return $this->getTypedRuleContext(ExpressionContext::class, 0);
    }

    public function AS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::AS, 0);
    }

    public function convertedDataType(): ?ConvertedDataTypeContext
    {
        return $this->getTypedRuleContext(ConvertedDataTypeContext::class, 0);
    }

    public function RR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RR_BRACKET, 0);
    }

    public function constant(): ?ConstantContext
    {
        return $this->getTypedRuleContext(ConstantContext::class, 0);
    }

    public function unaryOperator(): ?UnaryOperatorContext
    {
        return $this->getTypedRuleContext(UnaryOperatorContext::class, 0);
    }

    /**
     * @return array<CurrentTimestampContext>|CurrentTimestampContext|null
     */
    public function currentTimestamp(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(CurrentTimestampContext::class);
        }

        return $this->getTypedRuleContext(CurrentTimestampContext::class, $index);
    }

    public function ON(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ON, 0);
    }

    public function UPDATE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::UPDATE, 0);
    }

    public function fullId(): ?FullIdContext
    {
        return $this->getTypedRuleContext(FullIdContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterDefaultValue($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitDefaultValue($this);
        }
    }
}

