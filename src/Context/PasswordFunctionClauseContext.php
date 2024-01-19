<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class PasswordFunctionClauseContext extends ParserRuleContext
{
    /**
     * @var Token|null $functionName
     */
    public $functionName;

    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_passwordFunctionClause;
    }

    public function LR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LR_BRACKET, 0);
    }

    public function functionArg(): ?FunctionArgContext
    {
        return $this->getTypedRuleContext(FunctionArgContext::class, 0);
    }

    public function RR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RR_BRACKET, 0);
    }

    public function PASSWORD(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PASSWORD, 0);
    }

    public function OLD_PASSWORD(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::OLD_PASSWORD, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterPasswordFunctionClause($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitPasswordFunctionClause($this);
        }
    }
}

