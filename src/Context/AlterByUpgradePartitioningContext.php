<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class AlterByUpgradePartitioningContext extends AlterPartitionSpecificationContext
{
    public function __construct(AlterPartitionSpecificationContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function UPGRADE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::UPGRADE, 0);
    }

    public function PARTITIONING(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PARTITIONING, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterAlterByUpgradePartitioning($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitAlterByUpgradePartitioning($this);
        }
    }
}

