<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class ShortRevokeContext extends RevokeStatementContext
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

    public function ALL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ALL, 0);
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

    public function GRANT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::GRANT, 0);
    }

    public function OPTION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::OPTION, 0);
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

    public function PRIVILEGES(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PRIVILEGES, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterShortRevoke($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitShortRevoke($this);
        }
    }
}

