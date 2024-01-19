<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class CheckTableContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_checkTable;
    }

    public function CHECK(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CHECK, 0);
    }

    public function TABLE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TABLE, 0);
    }

    public function tables(): ?TablesContext
    {
        return $this->getTypedRuleContext(TablesContext::class, 0);
    }

    /**
     * @return array<CheckTableOptionContext>|CheckTableOptionContext|null
     */
    public function checkTableOption(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(CheckTableOptionContext::class);
        }

        return $this->getTypedRuleContext(CheckTableOptionContext::class, $index);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterCheckTable($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitCheckTable($this);
        }
    }
}

