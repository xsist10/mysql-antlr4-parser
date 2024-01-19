<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class WithLateralStatementContext extends SelectStatementContext
{
    public function __construct(SelectStatementContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function querySpecificationNointo(): ?QuerySpecificationNointoContext
    {
        return $this->getTypedRuleContext(QuerySpecificationNointoContext::class, 0);
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

    /**
     * @return array<LateralStatementContext>|LateralStatementContext|null
     */
    public function lateralStatement(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(LateralStatementContext::class);
        }

        return $this->getTypedRuleContext(LateralStatementContext::class, $index);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterWithLateralStatement($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitWithLateralStatement($this);
        }
    }
}

