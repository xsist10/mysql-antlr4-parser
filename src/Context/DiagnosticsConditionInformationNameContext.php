<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class DiagnosticsConditionInformationNameContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_diagnosticsConditionInformationName;
    }

    public function CLASS_ORIGIN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CLASS_ORIGIN, 0);
    }

    public function SUBCLASS_ORIGIN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SUBCLASS_ORIGIN, 0);
    }

    public function RETURNED_SQLSTATE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RETURNED_SQLSTATE, 0);
    }

    public function MESSAGE_TEXT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MESSAGE_TEXT, 0);
    }

    public function MYSQL_ERRNO(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MYSQL_ERRNO, 0);
    }

    public function CONSTRAINT_CATALOG(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CONSTRAINT_CATALOG, 0);
    }

    public function CONSTRAINT_SCHEMA(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CONSTRAINT_SCHEMA, 0);
    }

    public function CONSTRAINT_NAME(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CONSTRAINT_NAME, 0);
    }

    public function CATALOG_NAME(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CATALOG_NAME, 0);
    }

    public function SCHEMA_NAME(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SCHEMA_NAME, 0);
    }

    public function TABLE_NAME(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TABLE_NAME, 0);
    }

    public function COLUMN_NAME(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::COLUMN_NAME, 0);
    }

    public function CURSOR_NAME(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CURSOR_NAME, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterDiagnosticsConditionInformationName($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitDiagnosticsConditionInformationName($this);
        }
    }
}

