<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class AlterByImportPartitionContext extends AlterPartitionSpecificationContext
{
    public function __construct(AlterPartitionSpecificationContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function IMPORT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::IMPORT, 0);
    }

    public function PARTITION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PARTITION, 0);
    }

    public function TABLESPACE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TABLESPACE, 0);
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
            $listener->enterAlterByImportPartition($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitAlterByImportPartition($this);
        }
    }
}

