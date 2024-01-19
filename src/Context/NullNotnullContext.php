<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class NullNotnullContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_nullNotnull;
    }

    public function NULL_LITERAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::NULL_LITERAL, 0);
    }

    public function NULL_SPEC_LITERAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::NULL_SPEC_LITERAL, 0);
    }

    public function NOT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::NOT, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterNullNotnull($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitNullNotnull($this);
        }
    }
}

