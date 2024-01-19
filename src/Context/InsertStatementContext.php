<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class InsertStatementContext extends ParserRuleContext
{
    /**
     * @var Token|null $priority
     */
    public $priority;

    /**
     * @var UidListContext|null $partitions
     */
    public $partitions;

    /**
     * @var FullColumnNameListContext|null $columns
     */
    public $columns;

    /**
     * @var UpdatedElementContext|null $setFirst
     */
    public $setFirst;

    /**
     * @var UpdatedElementContext|null $updatedElement
     */
    public $updatedElement;

    /**
     * @var UpdatedElementContext|null $duplicatedFirst
     */
    public $duplicatedFirst;

    /**
     * @var array<UpdatedElementContext>|null $setElements
     */
    public $setElements;

    /**
     * @var array<UpdatedElementContext>|null $duplicatedElements
     */
    public $duplicatedElements;

    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_insertStatement;
    }

    public function INSERT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INSERT, 0);
    }

    public function tableName(): ?TableNameContext
    {
        return $this->getTypedRuleContext(TableNameContext::class, 0);
    }

    public function insertStatementValue(): ?InsertStatementValueContext
    {
        return $this->getTypedRuleContext(InsertStatementValueContext::class, 0);
    }

    public function SET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SET, 0);
    }

    public function IGNORE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::IGNORE, 0);
    }

    public function INTO(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INTO, 0);
    }

    public function PARTITION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PARTITION, 0);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function LR_BRACKET(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::LR_BRACKET);
        }

        return $this->getToken(MySqlParser::LR_BRACKET, $index);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function RR_BRACKET(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::RR_BRACKET);
        }

        return $this->getToken(MySqlParser::RR_BRACKET, $index);
    }

    /**
     * @return array<UpdatedElementContext>|UpdatedElementContext|null
     */
    public function updatedElement(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(UpdatedElementContext::class);
        }

        return $this->getTypedRuleContext(UpdatedElementContext::class, $index);
    }

    public function ON(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ON, 0);
    }

    public function DUPLICATE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DUPLICATE, 0);
    }

    public function KEY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::KEY, 0);
    }

    public function UPDATE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::UPDATE, 0);
    }

    public function LOW_PRIORITY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LOW_PRIORITY, 0);
    }

    public function DELAYED(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DELAYED, 0);
    }

    public function HIGH_PRIORITY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::HIGH_PRIORITY, 0);
    }

    public function uid(): ?UidContext
    {
        return $this->getTypedRuleContext(UidContext::class, 0);
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

    public function uidList(): ?UidListContext
    {
        return $this->getTypedRuleContext(UidListContext::class, 0);
    }

    public function AS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::AS, 0);
    }

    public function fullColumnNameList(): ?FullColumnNameListContext
    {
        return $this->getTypedRuleContext(FullColumnNameListContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterInsertStatement($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitInsertStatement($this);
        }
    }
}

