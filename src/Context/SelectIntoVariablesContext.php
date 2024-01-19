<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class SelectIntoVariablesContext extends SelectIntoExpressionContext
{
    public function __construct(SelectIntoExpressionContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function INTO(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INTO, 0);
    }

    /**
     * @return array<AssignmentFieldContext>|AssignmentFieldContext|null
     */
    public function assignmentField(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(AssignmentFieldContext::class);
        }

        return $this->getTypedRuleContext(AssignmentFieldContext::class, $index);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function COMMA(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::COMMA);
        }

        return $this->getToken(MySqlParser::COMMA, $index);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterSelectIntoVariables($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitSelectIntoVariables($this);
        }
    }
}

