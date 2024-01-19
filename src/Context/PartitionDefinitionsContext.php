<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class PartitionDefinitionsContext extends ParserRuleContext
{
    /**
     * @var DecimalLiteralContext|null $count
     */
    public $count;

    /**
     * @var DecimalLiteralContext|null $subCount
     */
    public $subCount;

    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_partitionDefinitions;
    }

    public function PARTITION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PARTITION, 0);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function BY(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::BY);
        }

        return $this->getToken(MySqlParser::BY, $index);
    }

    public function partitionFunctionDefinition(): ?PartitionFunctionDefinitionContext
    {
        return $this->getTypedRuleContext(PartitionFunctionDefinitionContext::class, 0);
    }

    public function PARTITIONS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PARTITIONS, 0);
    }

    public function SUBPARTITION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SUBPARTITION, 0);
    }

    public function subpartitionFunctionDefinition(): ?SubpartitionFunctionDefinitionContext
    {
        return $this->getTypedRuleContext(SubpartitionFunctionDefinitionContext::class, 0);
    }

    public function LR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LR_BRACKET, 0);
    }

    /**
     * @return array<PartitionDefinitionContext>|PartitionDefinitionContext|null
     */
    public function partitionDefinition(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(PartitionDefinitionContext::class);
        }

        return $this->getTypedRuleContext(PartitionDefinitionContext::class, $index);
    }

    public function RR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RR_BRACKET, 0);
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

    public function SUBPARTITIONS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SUBPARTITIONS, 0);
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
            $listener->enterPartitionDefinitions($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitPartitionDefinitions($this);
        }
    }
}

