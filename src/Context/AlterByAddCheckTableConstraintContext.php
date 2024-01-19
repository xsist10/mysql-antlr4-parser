<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class AlterByAddCheckTableConstraintContext extends AlterSpecificationContext
{
    /**
     * @var UidContext|null $name
     */
    public $name;

    public function __construct(AlterSpecificationContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function ADD(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ADD, 0);
    }

    public function CHECK(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CHECK, 0);
    }

    /**
     * @return array<UidContext>|UidContext|null
     */
    public function uid(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(UidContext::class);
        }

        return $this->getTypedRuleContext(UidContext::class, $index);
    }

    public function stringLiteral(): ?StringLiteralContext
    {
        return $this->getTypedRuleContext(StringLiteralContext::class, 0);
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

    public function NOT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::NOT, 0);
    }

    public function ENFORCED(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ENFORCED, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterAlterByAddCheckTableConstraint($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitAlterByAddCheckTableConstraint($this);
        }
    }
}

