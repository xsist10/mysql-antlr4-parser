<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class TransactionOptionContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_transactionOption;
    }

    public function ISOLATION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ISOLATION, 0);
    }

    public function LEVEL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LEVEL, 0);
    }

    public function transactionLevel(): ?TransactionLevelContext
    {
        return $this->getTypedRuleContext(TransactionLevelContext::class, 0);
    }

    public function READ(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::READ, 0);
    }

    public function WRITE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::WRITE, 0);
    }

    public function ONLY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ONLY, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterTransactionOption($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitTransactionOption($this);
        }
    }
}

