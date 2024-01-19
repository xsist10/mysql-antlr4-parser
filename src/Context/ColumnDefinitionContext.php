<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class ColumnDefinitionContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_columnDefinition;
    }

    public function dataType(): ?DataTypeContext
    {
        return $this->getTypedRuleContext(DataTypeContext::class, 0);
    }

    /**
     * @return array<ColumnConstraintContext>|ColumnConstraintContext|null
     */
    public function columnConstraint(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(ColumnConstraintContext::class);
        }

        return $this->getTypedRuleContext(ColumnConstraintContext::class, $index);
    }

    public function NOT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::NOT, 0);
    }

    public function ENFORCED(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ENFORCED, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterColumnDefinition($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitColumnDefinition($this);
        }
    }
}

