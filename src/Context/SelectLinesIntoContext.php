<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class SelectLinesIntoContext extends ParserRuleContext
{
    /**
     * @var Token|null $starting
     */
    public $starting;

    /**
     * @var Token|null $terminationLine
     */
    public $terminationLine;

    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_selectLinesInto;
    }

    public function STARTING(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STARTING, 0);
    }

    public function BY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BY, 0);
    }

    public function STRING_LITERAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STRING_LITERAL, 0);
    }

    public function TERMINATED(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TERMINATED, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterSelectLinesInto($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitSelectLinesInto($this);
        }
    }
}

