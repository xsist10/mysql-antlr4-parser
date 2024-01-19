<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class TableIndexesContext extends ParserRuleContext
{
    /**
     * @var Token|null $indexFormat
     */
    public $indexFormat;

    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_tableIndexes;
    }

    public function tableName(): ?TableNameContext
    {
        return $this->getTypedRuleContext(TableNameContext::class, 0);
    }

    public function LR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LR_BRACKET, 0);
    }

    public function uidList(): ?UidListContext
    {
        return $this->getTypedRuleContext(UidListContext::class, 0);
    }

    public function RR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RR_BRACKET, 0);
    }

    public function INDEX(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INDEX, 0);
    }

    public function KEY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::KEY, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterTableIndexes($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitTableIndexes($this);
        }
    }
}

