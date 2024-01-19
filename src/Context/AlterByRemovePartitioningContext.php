<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class AlterByRemovePartitioningContext extends AlterPartitionSpecificationContext
{
    public function __construct(AlterPartitionSpecificationContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function REMOVE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::REMOVE, 0);
    }

    public function PARTITIONING(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PARTITIONING, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterAlterByRemovePartitioning($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitAlterByRemovePartitioning($this);
        }
    }
}

