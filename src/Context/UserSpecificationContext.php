<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class UserSpecificationContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_userSpecification;
    }

    public function userName(): ?UserNameContext
    {
        return $this->getTypedRuleContext(UserNameContext::class, 0);
    }

    public function userPasswordOption(): ?UserPasswordOptionContext
    {
        return $this->getTypedRuleContext(UserPasswordOptionContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterUserSpecification($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitUserSpecification($this);
        }
    }
}

