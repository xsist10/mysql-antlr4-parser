<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class LimitClauseContext extends ParserRuleContext
{
    /**
     * @var LimitClauseAtomContext|null $offset
     */
    public $offset;

    /**
     * @var LimitClauseAtomContext|null $limit
     */
    public $limit;

    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_limitClause;
    }

    public function LIMIT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LIMIT, 0);
    }

    public function OFFSET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::OFFSET, 0);
    }

    /**
     * @return array<LimitClauseAtomContext>|LimitClauseAtomContext|null
     */
    public function limitClauseAtom(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(LimitClauseAtomContext::class);
        }

        return $this->getTypedRuleContext(LimitClauseAtomContext::class, $index);
    }

    public function COMMA(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::COMMA, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterLimitClause($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitLimitClause($this);
        }
    }
}

