<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class CreateTriggerContext extends ParserRuleContext
{
    /**
     * @var Token|null $triggerTime
     */
    public $triggerTime;

    /**
     * @var Token|null $triggerEvent
     */
    public $triggerEvent;

    /**
     * @var Token|null $triggerPlace
     */
    public $triggerPlace;

    /**
     * @var FullIdContext|null $thisTrigger
     */
    public $thisTrigger;

    /**
     * @var FullIdContext|null $otherTrigger
     */
    public $otherTrigger;

    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_createTrigger;
    }

    public function CREATE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CREATE, 0);
    }

    public function TRIGGER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TRIGGER, 0);
    }

    public function ON(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ON, 0);
    }

    public function tableName(): ?TableNameContext
    {
        return $this->getTypedRuleContext(TableNameContext::class, 0);
    }

    public function FOR(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FOR, 0);
    }

    public function EACH(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::EACH, 0);
    }

    public function ROW(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ROW, 0);
    }

    public function routineBody(): ?RoutineBodyContext
    {
        return $this->getTypedRuleContext(RoutineBodyContext::class, 0);
    }

    /**
     * @return array<FullIdContext>|FullIdContext|null
     */
    public function fullId(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(FullIdContext::class);
        }

        return $this->getTypedRuleContext(FullIdContext::class, $index);
    }

    public function BEFORE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BEFORE, 0);
    }

    public function AFTER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::AFTER, 0);
    }

    public function INSERT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INSERT, 0);
    }

    public function UPDATE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::UPDATE, 0);
    }

    public function DELETE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DELETE, 0);
    }

    public function ownerStatement(): ?OwnerStatementContext
    {
        return $this->getTypedRuleContext(OwnerStatementContext::class, 0);
    }

    public function FOLLOWS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FOLLOWS, 0);
    }

    public function PRECEDES(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PRECEDES, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterCreateTrigger($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitCreateTrigger($this);
        }
    }
}

