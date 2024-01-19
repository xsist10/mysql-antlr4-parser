<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class GrantProxyContext extends ParserRuleContext
{
    /**
     * @var UserNameContext|null $fromFirst
     */
    public $fromFirst;

    /**
     * @var UserNameContext|null $toFirst
     */
    public $toFirst;

    /**
     * @var UserNameContext|null $userName
     */
    public $userName;

    /**
     * @var array<UserNameContext>|null $toOther
     */
    public $toOther;

    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_grantProxy;
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function GRANT(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::GRANT);
        }

        return $this->getToken(MySqlParser::GRANT, $index);
    }

    public function PROXY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PROXY, 0);
    }

    public function ON(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ON, 0);
    }

    public function TO(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TO, 0);
    }

    /**
     * @return array<UserNameContext>|UserNameContext|null
     */
    public function userName(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(UserNameContext::class);
        }

        return $this->getTypedRuleContext(UserNameContext::class, $index);
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

    public function WITH(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::WITH, 0);
    }

    public function OPTION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::OPTION, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterGrantProxy($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitGrantProxy($this);
        }
    }
}

