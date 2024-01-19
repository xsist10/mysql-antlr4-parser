<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class SubstrFunctionCallContext extends SpecificFunctionContext
{
    /**
     * @var StringLiteralContext|null $sourceString
     */
    public $sourceString;

    /**
     * @var ExpressionContext|null $sourceExpression
     */
    public $sourceExpression;

    /**
     * @var DecimalLiteralContext|null $fromDecimal
     */
    public $fromDecimal;

    /**
     * @var ExpressionContext|null $fromExpression
     */
    public $fromExpression;

    /**
     * @var DecimalLiteralContext|null $forDecimal
     */
    public $forDecimal;

    /**
     * @var ExpressionContext|null $forExpression
     */
    public $forExpression;

    public function __construct(SpecificFunctionContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function LR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LR_BRACKET, 0);
    }

    public function FROM(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FROM, 0);
    }

    public function RR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RR_BRACKET, 0);
    }

    public function SUBSTR(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SUBSTR, 0);
    }

    public function SUBSTRING(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SUBSTRING, 0);
    }

    public function stringLiteral(): ?StringLiteralContext
    {
        return $this->getTypedRuleContext(StringLiteralContext::class, 0);
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
     * @return array<DecimalLiteralContext>|DecimalLiteralContext|null
     */
    public function decimalLiteral(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(DecimalLiteralContext::class);
        }

        return $this->getTypedRuleContext(DecimalLiteralContext::class, $index);
    }

    public function FOR(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FOR, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterSubstrFunctionCall($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitSubstrFunctionCall($this);
        }
    }
}

