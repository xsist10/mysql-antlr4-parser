<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class RoleRevokeContext extends RevokeStatementContext
{
    public function __construct(RevokeStatementContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function REVOKE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::REVOKE, 0);
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
     * @return array<UidContext>|UidContext|null
     */
    public function uid(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(UidContext::class);
        }

        return $this->getTypedRuleContext(UidContext::class, $index);
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
            $listener->enterRoleRevoke($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitRoleRevoke($this);
        }
    }
}

