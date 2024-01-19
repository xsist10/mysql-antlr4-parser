<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class GtuidSetContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_gtuidSet;
    }

    /**
     * @return array<UuidSetContext>|UuidSetContext|null
     */
    public function uuidSet(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(UuidSetContext::class);
        }

        return $this->getTypedRuleContext(UuidSetContext::class, $index);
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

    public function STRING_LITERAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STRING_LITERAL, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterGtuidSet($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitGtuidSet($this);
        }
    }
}

