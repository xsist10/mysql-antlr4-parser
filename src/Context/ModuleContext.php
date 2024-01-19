<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class ModuleContext extends AuthenticationRuleContext
{
    public function __construct(AuthenticationRuleContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function authPlugin(): ?AuthPluginContext
    {
        return $this->getTypedRuleContext(AuthPluginContext::class, 0);
    }

    public function authOptionClause(): ?AuthOptionClauseContext
    {
        return $this->getTypedRuleContext(AuthOptionClauseContext::class, 0);
    }

    public function BY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BY, 0);
    }

    public function USING(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::USING, 0);
    }

    public function AS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::AS, 0);
    }

    public function STRING_LITERAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STRING_LITERAL, 0);
    }

    public function RANDOM(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RANDOM, 0);
    }

    public function PASSWORD(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PASSWORD, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterModule($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitModule($this);
        }
    }
}

