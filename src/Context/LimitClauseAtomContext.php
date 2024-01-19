<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class LimitClauseAtomContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_limitClauseAtom;
    }

    public function decimalLiteral(): ?DecimalLiteralContext
    {
        return $this->getTypedRuleContext(DecimalLiteralContext::class, 0);
    }

    public function mysqlVariable(): ?MysqlVariableContext
    {
        return $this->getTypedRuleContext(MysqlVariableContext::class, 0);
    }

    public function simpleId(): ?SimpleIdContext
    {
        return $this->getTypedRuleContext(SimpleIdContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterLimitClauseAtom($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitLimitClauseAtom($this);
        }
    }
}

