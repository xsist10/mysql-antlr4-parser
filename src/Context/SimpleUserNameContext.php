<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class SimpleUserNameContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_simpleUserName;
    }

    public function STRING_LITERAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STRING_LITERAL, 0);
    }

    public function ID(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ID, 0);
    }

    public function ADMIN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ADMIN, 0);
    }

    public function keywordsCanBeId(): ?KeywordsCanBeIdContext
    {
        return $this->getTypedRuleContext(KeywordsCanBeIdContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterSimpleUserName($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitSimpleUserName($this);
        }
    }
}

