<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class StraightJoinContext extends JoinPartContext
{
    public function __construct(JoinPartContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function STRAIGHT_JOIN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STRAIGHT_JOIN, 0);
    }

    public function tableSourceItem(): ?TableSourceItemContext
    {
        return $this->getTypedRuleContext(TableSourceItemContext::class, 0);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function ON(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::ON);
        }

        return $this->getToken(MySqlParser::ON, $index);
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
            $listener->enterStraightJoin($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitStraightJoin($this);
        }
    }
}

