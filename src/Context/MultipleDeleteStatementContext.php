<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class MultipleDeleteStatementContext extends ParserRuleContext
{
    /**
     * @var Token|null $priority
     */
    public $priority;

    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_multipleDeleteStatement;
    }

    public function DELETE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DELETE, 0);
    }

    /**
     * @return array<TableNameContext>|TableNameContext|null
     */
    public function tableName(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(TableNameContext::class);
        }

        return $this->getTypedRuleContext(TableNameContext::class, $index);
    }

    public function FROM(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FROM, 0);
    }

    public function tableSources(): ?TableSourcesContext
    {
        return $this->getTypedRuleContext(TableSourcesContext::class, 0);
    }

    public function USING(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::USING, 0);
    }

    public function QUICK(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::QUICK, 0);
    }

    public function IGNORE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::IGNORE, 0);
    }

    public function WHERE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::WHERE, 0);
    }

    public function expression(): ?ExpressionContext
    {
        return $this->getTypedRuleContext(ExpressionContext::class, 0);
    }

    public function LOW_PRIORITY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LOW_PRIORITY, 0);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function DOT(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::DOT);
        }

        return $this->getToken(MySqlParser::DOT, $index);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function STAR(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::STAR);
        }

        return $this->getToken(MySqlParser::STAR, $index);
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
            $listener->enterMultipleDeleteStatement($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitMultipleDeleteStatement($this);
        }
    }
}

