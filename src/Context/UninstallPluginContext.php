<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class UninstallPluginContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_uninstallPlugin;
    }

    public function UNINSTALL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::UNINSTALL, 0);
    }

    public function PLUGIN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PLUGIN, 0);
    }

    public function uid(): ?UidContext
    {
        return $this->getTypedRuleContext(UidContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterUninstallPlugin($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitUninstallPlugin($this);
        }
    }
}

