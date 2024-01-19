<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class DropRoleContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_dropRole;
    }

    public function DROP(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DROP, 0);
    }

    public function ROLE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ROLE, 0);
    }

    /**
     * @return array<RoleNameContext>|RoleNameContext|null
     */
    public function roleName(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(RoleNameContext::class);
        }

        return $this->getTypedRuleContext(RoleNameContext::class, $index);
    }

    public function ifExists(): ?IfExistsContext
    {
        return $this->getTypedRuleContext(IfExistsContext::class, 0);
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
            $listener->enterDropRole($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitDropRole($this);
        }
    }
}

