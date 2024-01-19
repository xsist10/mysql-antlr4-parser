<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class StartTransactionContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_startTransaction;
    }

    public function START(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::START, 0);
    }

    public function TRANSACTION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TRANSACTION, 0);
    }

    /**
     * @return array<TransactionModeContext>|TransactionModeContext|null
     */
    public function transactionMode(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(TransactionModeContext::class);
        }

        return $this->getTypedRuleContext(TransactionModeContext::class, $index);
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
            $listener->enterStartTransaction($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitStartTransaction($this);
        }
    }
}

