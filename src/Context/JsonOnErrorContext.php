<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class JsonOnErrorContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_jsonOnError;
    }

    public function ON(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ON, 0);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function ERROR(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::ERROR);
        }

        return $this->getToken(MySqlParser::ERROR, $index);
    }

    public function NULL_LITERAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::NULL_LITERAL, 0);
    }

    public function DEFAULT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DEFAULT, 0);
    }

    public function defaultValue(): ?DefaultValueContext
    {
        return $this->getTypedRuleContext(DefaultValueContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterJsonOnError($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitJsonOnError($this);
        }
    }
}

