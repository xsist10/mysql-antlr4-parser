<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class AlterUserMysqlV80Context extends AlterUserContext
{
    /**
     * @var Token|null $tlsNone
     */
    public $tlsNone;

    public function __construct(AlterUserContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function ALTER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ALTER, 0);
    }

    public function USER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::USER, 0);
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

    public function REQUIRE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::REQUIRE, 0);
    }

    public function WITH(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::WITH, 0);
    }

    /**
     * @return array<UserPasswordOptionContext>|UserPasswordOptionContext|null
     */
    public function userPasswordOption(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(UserPasswordOptionContext::class);
        }

        return $this->getTypedRuleContext(UserPasswordOptionContext::class, $index);
    }

    /**
     * @return array<UserLockOptionContext>|UserLockOptionContext|null
     */
    public function userLockOption(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(UserLockOptionContext::class);
        }

        return $this->getTypedRuleContext(UserLockOptionContext::class, $index);
    }

    public function COMMENT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::COMMENT, 0);
    }

    public function STRING_LITERAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STRING_LITERAL, 0);
    }

    public function ATTRIBUTE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ATTRIBUTE, 0);
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

    public function DEFAULT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DEFAULT, 0);
    }

    public function ROLE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ROLE, 0);
    }

    public function roleOption(): ?RoleOptionContext
    {
        return $this->getTypedRuleContext(RoleOptionContext::class, 0);
    }

    public function userName(): ?UserNameContext
    {
        return $this->getTypedRuleContext(UserNameContext::class, 0);
    }

    public function uid(): ?UidContext
    {
        return $this->getTypedRuleContext(UidContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterAlterUserMysqlV80($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitAlterUserMysqlV80($this);
        }
    }
}

