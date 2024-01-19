<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class AlterTableContext extends ParserRuleContext
{
    /**
     * @var Token|null $intimeAction
     */
    public $intimeAction;

    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_alterTable;
    }

    public function ALTER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ALTER, 0);
    }

    public function TABLE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TABLE, 0);
    }

    public function tableName(): ?TableNameContext
    {
        return $this->getTypedRuleContext(TableNameContext::class, 0);
    }

    public function IGNORE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::IGNORE, 0);
    }

    public function waitNowaitClause(): ?WaitNowaitClauseContext
    {
        return $this->getTypedRuleContext(WaitNowaitClauseContext::class, 0);
    }

    /**
     * @return array<AlterSpecificationContext>|AlterSpecificationContext|null
     */
    public function alterSpecification(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(AlterSpecificationContext::class);
        }

        return $this->getTypedRuleContext(AlterSpecificationContext::class, $index);
    }

    public function partitionDefinitions(): ?PartitionDefinitionsContext
    {
        return $this->getTypedRuleContext(PartitionDefinitionsContext::class, 0);
    }

    public function ONLINE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ONLINE, 0);
    }

    public function OFFLINE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::OFFLINE, 0);
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
            $listener->enterAlterTable($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitAlterTable($this);
        }
    }
}

