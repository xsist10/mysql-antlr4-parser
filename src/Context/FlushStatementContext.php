<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class FlushStatementContext extends ParserRuleContext
{
    /**
     * @var Token|null $flushFormat
     */
    public $flushFormat;

    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_flushStatement;
    }

    public function FLUSH(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FLUSH, 0);
    }

    /**
     * @return array<FlushOptionContext>|FlushOptionContext|null
     */
    public function flushOption(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(FlushOptionContext::class);
        }

        return $this->getTypedRuleContext(FlushOptionContext::class, $index);
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

    public function NO_WRITE_TO_BINLOG(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::NO_WRITE_TO_BINLOG, 0);
    }

    public function LOCAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LOCAL, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterFlushStatement($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitFlushStatement($this);
        }
    }
}

