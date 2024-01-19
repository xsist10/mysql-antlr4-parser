<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class WithStatementContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_withStatement;
    }

    public function WITH(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::WITH, 0);
    }

    /**
     * @return array<CommonTableExpressionsContext>|CommonTableExpressionsContext|null
     */
    public function commonTableExpressions(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(CommonTableExpressionsContext::class);
        }

        return $this->getTypedRuleContext(CommonTableExpressionsContext::class, $index);
    }

    public function RECURSIVE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RECURSIVE, 0);
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
            $listener->enterWithStatement($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitWithStatement($this);
        }
    }
}

