<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class PasswordModuleOptionContext extends AuthenticationRuleContext
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

    public function USING(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::USING, 0);
    }

    public function passwordFunctionClause(): ?PasswordFunctionClauseContext
    {
        return $this->getTypedRuleContext(PasswordFunctionClauseContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterPasswordModuleOption($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitPasswordModuleOption($this);
        }
    }
}

