<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class XidContext extends ParserRuleContext
{
    /**
     * @var XuidStringIdContext|null $globalTableUid
     */
    public $globalTableUid;

    /**
     * @var XuidStringIdContext|null $qualifier
     */
    public $qualifier;

    /**
     * @var DecimalLiteralContext|null $idFormat
     */
    public $idFormat;

    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_xid;
    }

    /**
     * @return array<XuidStringIdContext>|XuidStringIdContext|null
     */
    public function xuidStringId(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(XuidStringIdContext::class);
        }

        return $this->getTypedRuleContext(XuidStringIdContext::class, $index);
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

    public function decimalLiteral(): ?DecimalLiteralContext
    {
        return $this->getTypedRuleContext(DecimalLiteralContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterXid($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitXid($this);
        }
    }
}

