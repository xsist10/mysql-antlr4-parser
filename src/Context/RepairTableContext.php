<?php

declare(strict_types=1);


namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class RepairTableContext extends ParserRuleContext
{
    /**
     * @var Token|null $actionOption
     */
    public $actionOption;

    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_repairTable;
    }

    public function REPAIR(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::REPAIR, 0);
    }

    public function TABLE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TABLE, 0);
    }

    public function tables(): ?TablesContext
    {
        return $this->getTypedRuleContext(TablesContext::class, 0);
    }

    public function QUICK(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::QUICK, 0);
    }

    public function EXTENDED(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::EXTENDED, 0);
    }

    public function USE_FRM(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::USE_FRM, 0);
    }

    public function NO_WRITE_TO_BINLOG(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::NO_WRITE_TO_BINLOG, 0);
    }

    public function LOCAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LOCAL, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterRepairTable($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitRepairTable($this);
        }
    }
}
