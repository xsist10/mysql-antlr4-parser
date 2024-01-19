<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class SetTransactionStatementContext extends ParserRuleContext
{
    /**
     * @var Token|null $transactionContext
     */
    public $transactionContext;

    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_setTransactionStatement;
    }

    public function SET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SET, 0);
    }

    public function TRANSACTION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TRANSACTION, 0);
    }

    /**
     * @return array<TransactionOptionContext>|TransactionOptionContext|null
     */
    public function transactionOption(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(TransactionOptionContext::class);
        }

        return $this->getTypedRuleContext(TransactionOptionContext::class, $index);
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

    public function GLOBAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::GLOBAL, 0);
    }

    public function SESSION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SESSION, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterSetTransactionStatement($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitSetTransactionStatement($this);
        }
    }
}

