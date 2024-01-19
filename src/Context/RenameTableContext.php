<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class RenameTableContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_renameTable;
    }

    public function RENAME(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RENAME, 0);
    }

    public function TABLE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TABLE, 0);
    }

    /**
     * @return array<RenameTableClauseContext>|RenameTableClauseContext|null
     */
    public function renameTableClause(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(RenameTableClauseContext::class);
        }

        return $this->getTypedRuleContext(RenameTableClauseContext::class, $index);
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
            $listener->enterRenameTable($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitRenameTable($this);
        }
    }
}

