<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class UserNameContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_userName;
    }

    public function simpleUserName(): ?SimpleUserNameContext
    {
        return $this->getTypedRuleContext(SimpleUserNameContext::class, 0);
    }

    public function hostName(): ?HostNameContext
    {
        return $this->getTypedRuleContext(HostNameContext::class, 0);
    }

    public function currentUserExpression(): ?CurrentUserExpressionContext
    {
        return $this->getTypedRuleContext(CurrentUserExpressionContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterUserName($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitUserName($this);
        }
    }
}

