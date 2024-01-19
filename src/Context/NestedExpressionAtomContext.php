<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class NestedExpressionAtomContext extends ExpressionAtomContext
{
    public function __construct(ExpressionAtomContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function LR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LR_BRACKET, 0);
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

    public function RR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RR_BRACKET, 0);
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
            $listener->enterNestedExpressionAtom($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitNestedExpressionAtom($this);
        }
    }
}

