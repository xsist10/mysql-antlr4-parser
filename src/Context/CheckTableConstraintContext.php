<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class CheckTableConstraintContext extends TableConstraintContext
{
    /**
     * @var UidContext|null $name
     */
    public $name;

    public function __construct(TableConstraintContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function CHECK(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CHECK, 0);
    }

    public function LR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LR_BRACKET, 0);
    }

    public function expression(): ?ExpressionContext
    {
        return $this->getTypedRuleContext(ExpressionContext::class, 0);
    }

    public function RR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RR_BRACKET, 0);
    }

    public function CONSTRAINT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CONSTRAINT, 0);
    }

    public function uid(): ?UidContext
    {
        return $this->getTypedRuleContext(UidContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterCheckTableConstraint($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitCheckTableConstraint($this);
        }
    }
}

