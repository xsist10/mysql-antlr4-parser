<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class WithClauseContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_withClause;
    }

    public function WITH(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::WITH, 0);
    }

    public function commonTableExpressions(): ?CommonTableExpressionsContext
    {
        return $this->getTypedRuleContext(CommonTableExpressionsContext::class, 0);
    }

    public function RECURSIVE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RECURSIVE, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterWithClause($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitWithClause($this);
        }
    }
}

