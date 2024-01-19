<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class OuterJoinContext extends JoinPartContext
{
    public function __construct(JoinPartContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function JOIN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::JOIN, 0);
    }

    public function tableSourceItem(): ?TableSourceItemContext
    {
        return $this->getTypedRuleContext(TableSourceItemContext::class, 0);
    }

    public function LEFT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LEFT, 0);
    }

    public function RIGHT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RIGHT, 0);
    }

    public function OUTER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::OUTER, 0);
    }

    public function LATERAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LATERAL, 0);
    }

    /**
     * @return array<JoinSpecContext>|JoinSpecContext|null
     */
    public function joinSpec(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(JoinSpecContext::class);
        }

        return $this->getTypedRuleContext(JoinSpecContext::class, $index);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterOuterJoin($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitOuterJoin($this);
        }
    }
}

