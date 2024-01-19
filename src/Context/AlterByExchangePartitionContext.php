<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class AlterByExchangePartitionContext extends AlterPartitionSpecificationContext
{
    /**
     * @var Token|null $validationFormat
     */
    public $validationFormat;

    public function __construct(AlterPartitionSpecificationContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function EXCHANGE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::EXCHANGE, 0);
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
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function WITH(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::WITH);
        }

        return $this->getToken(MySqlParser::WITH, $index);
    }

    public function TABLE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TABLE, 0);
    }

    public function tableName(): ?TableNameContext
    {
        return $this->getTypedRuleContext(TableNameContext::class, 0);
    }

    public function VALIDATION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::VALIDATION, 0);
    }

    public function WITHOUT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::WITHOUT, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterAlterByExchangePartition($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitAlterByExchangePartition($this);
        }
    }
}

