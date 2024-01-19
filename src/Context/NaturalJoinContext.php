<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class NaturalJoinContext extends JoinPartContext
{
    public function __construct(JoinPartContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function NATURAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::NATURAL, 0);
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

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterNaturalJoin($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitNaturalJoin($this);
        }
    }
}

