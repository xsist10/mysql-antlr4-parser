<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class MultipleUpdateStatementContext extends ParserRuleContext
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
        return MySqlParser::RULE_multipleUpdateStatement;
    }

    public function UPDATE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::UPDATE, 0);
    }

    public function tableSources(): ?TableSourcesContext
    {
        return $this->getTypedRuleContext(TableSourcesContext::class, 0);
    }

    public function SET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SET, 0);
    }

    /**
     * @return array<UpdatedElementContext>|UpdatedElementContext|null
     */
    public function updatedElement(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(UpdatedElementContext::class);
        }

        return $this->getTypedRuleContext(UpdatedElementContext::class, $index);
    }

    public function IGNORE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::IGNORE, 0);
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

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterMultipleUpdateStatement($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitMultipleUpdateStatement($this);
        }
    }
}

