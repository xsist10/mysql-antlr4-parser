<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class SubpartitionDefinitionContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_subpartitionDefinition;
    }

    public function SUBPARTITION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SUBPARTITION, 0);
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

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterSubpartitionDefinition($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitSubpartitionDefinition($this);
        }
    }
}
