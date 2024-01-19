<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class GrantStatementContext extends ParserRuleContext
{
    /**
     * @var Token|null $privilegeObject
     */
    public $privilegeObject;

    /**
     * @var Token|null $tlsNone
     */
    public $tlsNone;

    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_grantStatement;
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

    /**
     * @return array<PrivelegeClauseContext>|PrivelegeClauseContext|null
     */
    public function privelegeClause(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(PrivelegeClauseContext::class);
        }

        return $this->getTypedRuleContext(PrivelegeClauseContext::class, $index);
    }

    public function ON(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ON, 0);
    }

    public function privilegeLevel(): ?PrivilegeLevelContext
    {
        return $this->getTypedRuleContext(PrivilegeLevelContext::class, 0);
    }

    public function TO(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TO, 0);
    }

    /**
     * @return array<UserAuthOptionContext>|UserAuthOptionContext|null
     */
    public function userAuthOption(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(UserAuthOptionContext::class);
        }

        return $this->getTypedRuleContext(UserAuthOptionContext::class, $index);
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

    public function REQUIRE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::REQUIRE, 0);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function WITH(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::WITH);
        }

        return $this->getToken(MySqlParser::WITH, $index);
    }

    public function AS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::AS, 0);
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

    public function ROLE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ROLE, 0);
    }

    public function roleOption(): ?RoleOptionContext
    {
        return $this->getTypedRuleContext(RoleOptionContext::class, 0);
    }

    public function TABLE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TABLE, 0);
    }

    public function FUNCTION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FUNCTION, 0);
    }

    public function PROCEDURE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PROCEDURE, 0);
    }

    /**
     * @return array<TlsOptionContext>|TlsOptionContext|null
     */
    public function tlsOption(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(TlsOptionContext::class);
        }

        return $this->getTypedRuleContext(TlsOptionContext::class, $index);
    }

    public function NONE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::NONE, 0);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function OPTION(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::OPTION);
        }

        return $this->getToken(MySqlParser::OPTION, $index);
    }

    /**
     * @return array<UserResourceOptionContext>|UserResourceOptionContext|null
     */
    public function userResourceOption(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(UserResourceOptionContext::class);
        }

        return $this->getTypedRuleContext(UserResourceOptionContext::class, $index);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function AND(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::AND);
        }

        return $this->getToken(MySqlParser::AND, $index);
    }

    /**
     * @return array<UidContext>|UidContext|null
     */
    public function uid(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(UidContext::class);
        }

        return $this->getTypedRuleContext(UidContext::class, $index);
    }

    public function ADMIN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ADMIN, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterGrantStatement($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitGrantStatement($this);
        }
    }
}

