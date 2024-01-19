<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class ReplaceStatementContext extends ParserRuleContext
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
     * @var UidListContext|null $columns
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
     * @var array<UpdatedElementContext>|null $setElements
     */
    public $setElements;

    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_replaceStatement;
    }

    public function REPLACE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::REPLACE, 0);
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

    /**
     * @return array<UidListContext>|UidListContext|null
     */
    public function uidList(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(UidListContext::class);
        }

        return $this->getTypedRuleContext(UidListContext::class, $index);
    }

    public function LOW_PRIORITY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LOW_PRIORITY, 0);
    }

    public function DELAYED(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DELAYED, 0);
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
            $listener->enterReplaceStatement($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitReplaceStatement($this);
        }
    }
}

