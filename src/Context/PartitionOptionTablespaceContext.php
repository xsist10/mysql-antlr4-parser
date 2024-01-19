<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class PartitionOptionTablespaceContext extends PartitionOptionContext
{
    /**
     * @var UidContext|null $tablespace
     */
    public $tablespace;

    public function __construct(PartitionOptionContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function TABLESPACE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TABLESPACE, 0);
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
            $listener->enterPartitionOptionTablespace($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitPartitionOptionTablespace($this);
        }
    }
}

