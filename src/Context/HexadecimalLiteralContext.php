<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class HexadecimalLiteralContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_hexadecimalLiteral;
    }

    public function HEXADECIMAL_LITERAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::HEXADECIMAL_LITERAL, 0);
    }

    public function STRING_CHARSET_NAME(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STRING_CHARSET_NAME, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterHexadecimalLiteral($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitHexadecimalLiteral($this);
        }
    }
}

