<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class CaseFuncAlternativeContext extends ParserRuleContext
{
    /**
     * @var FunctionArgContext|null $condition
     */
    public $condition;

    /**
     * @var FunctionArgContext|null $consequent
     */
    public $consequent;

    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_caseFuncAlternative;
    }

    public function WHEN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::WHEN, 0);
    }

    public function THEN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::THEN, 0);
    }

    /**
     * @return array<FunctionArgContext>|FunctionArgContext|null
     */
    public function functionArg(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(FunctionArgContext::class);
        }

        return $this->getTypedRuleContext(FunctionArgContext::class, $index);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterCaseFuncAlternative($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitCaseFuncAlternative($this);
        }
    }
}

