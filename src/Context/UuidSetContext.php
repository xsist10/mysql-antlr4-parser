<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class UuidSetContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_uuidSet;
    }

    /**
     * @return array<DecimalLiteralContext>|DecimalLiteralContext|null
     */
    public function decimalLiteral(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(DecimalLiteralContext::class);
        }

        return $this->getTypedRuleContext(DecimalLiteralContext::class, $index);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function MINUS(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::MINUS);
        }

        return $this->getToken(MySqlParser::MINUS, $index);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function COLON_SYMB(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::COLON_SYMB);
        }

        return $this->getToken(MySqlParser::COLON_SYMB, $index);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterUuidSet($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitUuidSet($this);
        }
    }
}

