<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class TrimFunctionCallContext extends SpecificFunctionContext
{
    /**
     * @var Token|null $positioinForm
     */
    public $positioinForm;

    /**
     * @var StringLiteralContext|null $sourceString
     */
    public $sourceString;

    /**
     * @var ExpressionContext|null $sourceExpression
     */
    public $sourceExpression;

    /**
     * @var StringLiteralContext|null $fromString
     */
    public $fromString;

    /**
     * @var ExpressionContext|null $fromExpression
     */
    public $fromExpression;

    public function __construct(SpecificFunctionContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function TRIM(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TRIM, 0);
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

    public function BOTH(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BOTH, 0);
    }

    public function LEADING(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LEADING, 0);
    }

    public function TRAILING(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TRAILING, 0);
    }

    /**
     * @return array<StringLiteralContext>|StringLiteralContext|null
     */
    public function stringLiteral(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(StringLiteralContext::class);
        }

        return $this->getTypedRuleContext(StringLiteralContext::class, $index);
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

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterTrimFunctionCall($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitTrimFunctionCall($this);
        }
    }
}

