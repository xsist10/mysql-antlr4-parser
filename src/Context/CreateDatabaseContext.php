<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class CreateDatabaseContext extends ParserRuleContext
{
    /**
     * @var Token|null $dbFormat
     */
    public $dbFormat;

    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_createDatabase;
    }

    public function CREATE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CREATE, 0);
    }

    public function uid(): ?UidContext
    {
        return $this->getTypedRuleContext(UidContext::class, 0);
    }

    public function DATABASE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DATABASE, 0);
    }

    public function SCHEMA(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SCHEMA, 0);
    }

    public function ifNotExists(): ?IfNotExistsContext
    {
        return $this->getTypedRuleContext(IfNotExistsContext::class, 0);
    }

    /**
     * @return array<CreateDatabaseOptionContext>|CreateDatabaseOptionContext|null
     */
    public function createDatabaseOption(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(CreateDatabaseOptionContext::class);
        }

        return $this->getTypedRuleContext(CreateDatabaseOptionContext::class, $index);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterCreateDatabase($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitCreateDatabase($this);
        }
    }
}

