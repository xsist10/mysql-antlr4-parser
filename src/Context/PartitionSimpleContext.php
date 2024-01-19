<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class PartitionSimpleContext extends PartitionDefinitionContext
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

    public function LR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LR_BRACKET, 0);
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

    public function RR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RR_BRACKET, 0);
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
            $listener->enterPartitionSimple($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitPartitionSimple($this);
        }
    }
}

