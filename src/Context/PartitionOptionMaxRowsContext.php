<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class PartitionOptionMaxRowsContext extends PartitionOptionContext
{
    /**
     * @var DecimalLiteralContext|null $maxRows
     */
    public $maxRows;

    public function __construct(PartitionOptionContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function MAX_ROWS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MAX_ROWS, 0);
    }

    public function decimalLiteral(): ?DecimalLiteralContext
    {
        return $this->getTypedRuleContext(DecimalLiteralContext::class, 0);
    }

    public function EQUAL_SYMBOL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::EQUAL_SYMBOL, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterPartitionOptionMaxRows($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitPartitionOptionMaxRows($this);
        }
    }
}

