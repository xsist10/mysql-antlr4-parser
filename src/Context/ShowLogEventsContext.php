<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class ShowLogEventsContext extends ShowStatementContext
{
    /**
     * @var Token|null $logFormat
     */
    public $logFormat;

    /**
     * @var Token|null $filename
     */
    public $filename;

    /**
     * @var DecimalLiteralContext|null $fromPosition
     */
    public $fromPosition;

    /**
     * @var DecimalLiteralContext|null $offset
     */
    public $offset;

    /**
     * @var DecimalLiteralContext|null $rowCount
     */
    public $rowCount;

    public function __construct(ShowStatementContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function SHOW(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SHOW, 0);
    }

    public function EVENTS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::EVENTS, 0);
    }

    public function BINLOG(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BINLOG, 0);
    }

    public function RELAYLOG(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RELAYLOG, 0);
    }

    public function IN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::IN, 0);
    }

    public function FROM(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FROM, 0);
    }

    public function LIMIT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LIMIT, 0);
    }

    public function STRING_LITERAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STRING_LITERAL, 0);
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

    public function COMMA(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::COMMA, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterShowLogEvents($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitShowLogEvents($this);
        }
    }
}

