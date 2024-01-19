<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class KillStatementContext extends ParserRuleContext
{
    /**
     * @var Token|null $connectionFormat
     */
    public $connectionFormat;

    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_killStatement;
    }

    public function KILL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::KILL, 0);
    }

    public function expression(): ?ExpressionContext
    {
        return $this->getTypedRuleContext(ExpressionContext::class, 0);
    }

    public function CONNECTION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CONNECTION, 0);
    }

    public function QUERY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::QUERY, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterKillStatement($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitKillStatement($this);
        }
    }
}

