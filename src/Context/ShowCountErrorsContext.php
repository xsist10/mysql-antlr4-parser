<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class ShowCountErrorsContext extends ShowStatementContext
{
    /**
     * @var Token|null $errorFormat
     */
    public $errorFormat;

    public function __construct(ShowStatementContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function SHOW(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SHOW, 0);
    }

    public function COUNT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::COUNT, 0);
    }

    public function LR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LR_BRACKET, 0);
    }

    public function STAR(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STAR, 0);
    }

    public function RR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RR_BRACKET, 0);
    }

    public function ERRORS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ERRORS, 0);
    }

    public function WARNINGS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::WARNINGS, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterShowCountErrors($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitShowCountErrors($this);
        }
    }
}

