<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class SimpleIdContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_simpleId;
    }

    public function ID(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ID, 0);
    }

    public function charsetNameBase(): ?CharsetNameBaseContext
    {
        return $this->getTypedRuleContext(CharsetNameBaseContext::class, 0);
    }

    public function transactionLevelBase(): ?TransactionLevelBaseContext
    {
        return $this->getTypedRuleContext(TransactionLevelBaseContext::class, 0);
    }

    public function engineNameBase(): ?EngineNameBaseContext
    {
        return $this->getTypedRuleContext(EngineNameBaseContext::class, 0);
    }

    public function privilegesBase(): ?PrivilegesBaseContext
    {
        return $this->getTypedRuleContext(PrivilegesBaseContext::class, 0);
    }

    public function intervalTypeBase(): ?IntervalTypeBaseContext
    {
        return $this->getTypedRuleContext(IntervalTypeBaseContext::class, 0);
    }

    public function dataTypeBase(): ?DataTypeBaseContext
    {
        return $this->getTypedRuleContext(DataTypeBaseContext::class, 0);
    }

    public function keywordsCanBeId(): ?KeywordsCanBeIdContext
    {
        return $this->getTypedRuleContext(KeywordsCanBeIdContext::class, 0);
    }

    public function scalarFunctionName(): ?ScalarFunctionNameContext
    {
        return $this->getTypedRuleContext(ScalarFunctionNameContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterSimpleId($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitSimpleId($this);
        }
    }
}

