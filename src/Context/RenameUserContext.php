<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class RenameUserContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_renameUser;
    }

    public function RENAME(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RENAME, 0);
    }

    public function USER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::USER, 0);
    }

    /**
     * @return array<RenameUserClauseContext>|RenameUserClauseContext|null
     */
    public function renameUserClause(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(RenameUserClauseContext::class);
        }

        return $this->getTypedRuleContext(RenameUserClauseContext::class, $index);
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
            $listener->enterRenameUser($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitRenameUser($this);
        }
    }
}

