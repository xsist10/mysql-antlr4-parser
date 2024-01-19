<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class ReferenceDefinitionContext extends ParserRuleContext
{
    /**
     * @var Token|null $matchType
     */
    public $matchType;

    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_referenceDefinition;
    }

    public function REFERENCES(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::REFERENCES, 0);
    }

    public function tableName(): ?TableNameContext
    {
        return $this->getTypedRuleContext(TableNameContext::class, 0);
    }

    public function indexColumnNames(): ?IndexColumnNamesContext
    {
        return $this->getTypedRuleContext(IndexColumnNamesContext::class, 0);
    }

    public function MATCH(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MATCH, 0);
    }

    public function referenceAction(): ?ReferenceActionContext
    {
        return $this->getTypedRuleContext(ReferenceActionContext::class, 0);
    }

    public function FULL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FULL, 0);
    }

    public function PARTIAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PARTIAL, 0);
    }

    public function SIMPLE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SIMPLE, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterReferenceDefinition($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitReferenceDefinition($this);
        }
    }
}

