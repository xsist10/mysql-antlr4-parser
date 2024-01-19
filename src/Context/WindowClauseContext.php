<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class WindowClauseContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_windowClause;
    }

    public function WINDOW(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::WINDOW, 0);
    }

    /**
     * @return array<WindowNameContext>|WindowNameContext|null
     */
    public function windowName(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(WindowNameContext::class);
        }

        return $this->getTypedRuleContext(WindowNameContext::class, $index);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function AS(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::AS);
        }

        return $this->getToken(MySqlParser::AS, $index);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function LR_BRACKET(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::LR_BRACKET);
        }

        return $this->getToken(MySqlParser::LR_BRACKET, $index);
    }

    /**
     * @return array<WindowSpecContext>|WindowSpecContext|null
     */
    public function windowSpec(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(WindowSpecContext::class);
        }

        return $this->getTypedRuleContext(WindowSpecContext::class, $index);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function RR_BRACKET(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::RR_BRACKET);
        }

        return $this->getToken(MySqlParser::RR_BRACKET, $index);
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
            $listener->enterWindowClause($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitWindowClause($this);
        }
    }
}

