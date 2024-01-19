<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class DetailRevokeContext extends RevokeStatementContext
{
    /**
     * @var Token|null $privilegeObject
     */
    public $privilegeObject;

    public function __construct(RevokeStatementContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function REVOKE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::REVOKE, 0);
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

    public function FROM(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FROM, 0);
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

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterDetailRevoke($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitDetailRevoke($this);
        }
    }
}

