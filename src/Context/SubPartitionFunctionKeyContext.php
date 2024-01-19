<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class SubPartitionFunctionKeyContext extends SubpartitionFunctionDefinitionContext
{
    /**
     * @var Token|null $algType
     */
    public $algType;

    public function __construct(SubpartitionFunctionDefinitionContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function KEY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::KEY, 0);
    }

    public function LR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LR_BRACKET, 0);
    }

    public function uidList(): ?UidListContext
    {
        return $this->getTypedRuleContext(UidListContext::class, 0);
    }

    public function RR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RR_BRACKET, 0);
    }

    public function LINEAR(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LINEAR, 0);
    }

    public function ALGORITHM(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ALGORITHM, 0);
    }

    public function EQUAL_SYMBOL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::EQUAL_SYMBOL, 0);
    }

    public function ONE_DECIMAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ONE_DECIMAL, 0);
    }

    public function TWO_DECIMAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TWO_DECIMAL, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterSubPartitionFunctionKey($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitSubPartitionFunctionKey($this);
        }
    }
}

