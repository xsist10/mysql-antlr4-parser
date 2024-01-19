<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class ProcedureParameterContext extends ParserRuleContext
{
    /**
     * @var Token|null $direction
     */
    public $direction;

    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_procedureParameter;
    }

    public function uid(): ?UidContext
    {
        return $this->getTypedRuleContext(UidContext::class, 0);
    }

    public function dataType(): ?DataTypeContext
    {
        return $this->getTypedRuleContext(DataTypeContext::class, 0);
    }

    public function IN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::IN, 0);
    }

    public function OUT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::OUT, 0);
    }

    public function INOUT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INOUT, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterProcedureParameter($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitProcedureParameter($this);
        }
    }
}

