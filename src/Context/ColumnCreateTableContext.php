<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class ColumnCreateTableContext extends CreateTableContext
{
    public function __construct(CreateTableContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function CREATE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CREATE, 0);
    }

    public function TABLE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TABLE, 0);
    }

    public function tableName(): ?TableNameContext
    {
        return $this->getTypedRuleContext(TableNameContext::class, 0);
    }

    public function createDefinitions(): ?CreateDefinitionsContext
    {
        return $this->getTypedRuleContext(CreateDefinitionsContext::class, 0);
    }

    public function TEMPORARY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TEMPORARY, 0);
    }

    public function ifNotExists(): ?IfNotExistsContext
    {
        return $this->getTypedRuleContext(IfNotExistsContext::class, 0);
    }

    /**
     * @return array<TableOptionContext>|TableOptionContext|null
     */
    public function tableOption(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(TableOptionContext::class);
        }

        return $this->getTypedRuleContext(TableOptionContext::class, $index);
    }

    public function partitionDefinitions(): ?PartitionDefinitionsContext
    {
        return $this->getTypedRuleContext(PartitionDefinitionsContext::class, 0);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function COMMA(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::COMMA);
        }

        return $this->getToken(MySqlParser::COMMA, $index);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterColumnCreateTable($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitColumnCreateTable($this);
        }
    }
}

