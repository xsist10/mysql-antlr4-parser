<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class PartitionListVectorContext extends PartitionDefinitionContext
{
    public function __construct(PartitionDefinitionContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function PARTITION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PARTITION, 0);
    }

    public function uid(): ?UidContext
    {
        return $this->getTypedRuleContext(UidContext::class, 0);
    }

    public function VALUES(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::VALUES, 0);
    }

    public function IN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::IN, 0);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function LR_BRACKET(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::LR_BRACKET);
        }

        return $this->getToken(MySqlParser::LR_BRACKET, $index);
    }

    /**
     * @return array<PartitionDefinerVectorContext>|PartitionDefinerVectorContext|null
     */
    public function partitionDefinerVector(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(PartitionDefinerVectorContext::class);
        }

        return $this->getTypedRuleContext(PartitionDefinerVectorContext::class, $index);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function RR_BRACKET(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::RR_BRACKET);
        }

        return $this->getToken(MySqlParser::RR_BRACKET, $index);
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

    /**
     * @return array<PartitionOptionContext>|PartitionOptionContext|null
     */
    public function partitionOption(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(PartitionOptionContext::class);
        }

        return $this->getTypedRuleContext(PartitionOptionContext::class, $index);
    }

    /**
     * @return array<SubpartitionDefinitionContext>|SubpartitionDefinitionContext|null
     */
    public function subpartitionDefinition(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(SubpartitionDefinitionContext::class);
        }

        return $this->getTypedRuleContext(SubpartitionDefinitionContext::class, $index);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterPartitionListVector($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitPartitionListVector($this);
        }
    }
}

