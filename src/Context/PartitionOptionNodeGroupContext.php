<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class PartitionOptionNodeGroupContext extends PartitionOptionContext
{
    /**
     * @var UidContext|null $nodegroup
     */
    public $nodegroup;

    public function __construct(PartitionOptionContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function NODEGROUP(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::NODEGROUP, 0);
    }

    public function uid(): ?UidContext
    {
        return $this->getTypedRuleContext(UidContext::class, 0);
    }

    public function EQUAL_SYMBOL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::EQUAL_SYMBOL, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterPartitionOptionNodeGroup($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitPartitionOptionNodeGroup($this);
        }
    }
}

