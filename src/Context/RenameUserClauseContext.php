<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class RenameUserClauseContext extends ParserRuleContext
{
    /**
     * @var UserNameContext|null $fromFirst
     */
    public $fromFirst;

    /**
     * @var UserNameContext|null $toFirst
     */
    public $toFirst;

    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_renameUserClause;
    }

    public function TO(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TO, 0);
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

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterRenameUserClause($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitRenameUserClause($this);
        }
    }
}

