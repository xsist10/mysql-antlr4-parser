<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class CaseFunctionCallContext extends SpecificFunctionContext
{
    /**
     * @var FunctionArgContext|null $elseArg
     */
    public $elseArg;

    public function __construct(SpecificFunctionContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function CASE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CASE, 0);
    }

    public function END(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::END, 0);
    }

    /**
     * @return array<CaseFuncAlternativeContext>|CaseFuncAlternativeContext|null
     */
    public function caseFuncAlternative(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(CaseFuncAlternativeContext::class);
        }

        return $this->getTypedRuleContext(CaseFuncAlternativeContext::class, $index);
    }

    public function ELSE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ELSE, 0);
    }

    public function functionArg(): ?FunctionArgContext
    {
        return $this->getTypedRuleContext(FunctionArgContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterCaseFunctionCall($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitCaseFunctionCall($this);
        }
    }
}

