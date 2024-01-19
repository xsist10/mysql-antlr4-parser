<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class AutoIncrementColumnConstraintContext extends ColumnConstraintContext
{
    public function __construct(ColumnConstraintContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function AUTO_INCREMENT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::AUTO_INCREMENT, 0);
    }

    public function ON(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ON, 0);
    }

    public function UPDATE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::UPDATE, 0);
    }

    public function currentTimestamp(): ?CurrentTimestampContext
    {
        return $this->getTypedRuleContext(CurrentTimestampContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterAutoIncrementColumnConstraint($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitAutoIncrementColumnConstraint($this);
        }
    }
}

