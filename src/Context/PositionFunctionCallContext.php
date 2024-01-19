<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class PositionFunctionCallContext extends SpecificFunctionContext
{
    /**
     * @var StringLiteralContext|null $positionString
     */
    public $positionString;

    /**
     * @var ExpressionContext|null $positionExpression
     */
    public $positionExpression;

    /**
     * @var StringLiteralContext|null $inString
     */
    public $inString;

    /**
     * @var ExpressionContext|null $inExpression
     */
    public $inExpression;

    public function __construct(SpecificFunctionContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function POSITION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::POSITION, 0);
    }

    public function LR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LR_BRACKET, 0);
    }

    public function IN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::IN, 0);
    }

    public function RR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RR_BRACKET, 0);
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
            $listener->enterPositionFunctionCall($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitPositionFunctionCall($this);
        }
    }
}

