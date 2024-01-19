<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class PartitionOptionMinRowsContext extends PartitionOptionContext
{
    /**
     * @var DecimalLiteralContext|null $minRows
     */
    public $minRows;

    public function __construct(PartitionOptionContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function MIN_ROWS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MIN_ROWS, 0);
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
            $listener->enterPartitionOptionMinRows($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitPartitionOptionMinRows($this);
        }
    }
}

