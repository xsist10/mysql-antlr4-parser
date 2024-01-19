<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class AlterByTruncatePartitionContext extends AlterPartitionSpecificationContext
{
    public function __construct(AlterPartitionSpecificationContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function TRUNCATE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TRUNCATE, 0);
    }

    public function PARTITION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PARTITION, 0);
    }

    public function uidList(): ?UidListContext
    {
        return $this->getTypedRuleContext(UidListContext::class, 0);
    }

    public function ALL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ALL, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterAlterByTruncatePartition($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitAlterByTruncatePartition($this);
        }
    }
}

