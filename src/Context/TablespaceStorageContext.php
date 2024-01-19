<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class TablespaceStorageContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_tablespaceStorage;
    }

    public function STORAGE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STORAGE, 0);
    }

    public function DISK(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DISK, 0);
    }

    public function MEMORY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MEMORY, 0);
    }

    public function DEFAULT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DEFAULT, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterTablespaceStorage($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitTablespaceStorage($this);
        }
    }
}

