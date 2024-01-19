<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class TransactionLevelBaseContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_transactionLevelBase;
    }

    public function REPEATABLE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::REPEATABLE, 0);
    }

    public function COMMITTED(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::COMMITTED, 0);
    }

    public function UNCOMMITTED(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::UNCOMMITTED, 0);
    }

    public function SERIALIZABLE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SERIALIZABLE, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterTransactionLevelBase($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitTransactionLevelBase($this);
        }
    }
}

