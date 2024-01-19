<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class TableOptionRowFormatContext extends TableOptionContext
{
    /**
     * @var Token|null $rowFormat
     */
    public $rowFormat;

    public function __construct(TableOptionContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function ROW_FORMAT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ROW_FORMAT, 0);
    }

    public function DEFAULT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DEFAULT, 0);
    }

    public function DYNAMIC(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DYNAMIC, 0);
    }

    public function FIXED(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FIXED, 0);
    }

    public function COMPRESSED(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::COMPRESSED, 0);
    }

    public function REDUNDANT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::REDUNDANT, 0);
    }

    public function COMPACT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::COMPACT, 0);
    }

    public function ID(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ID, 0);
    }

    public function EQUAL_SYMBOL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::EQUAL_SYMBOL, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterTableOptionRowFormat($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitTableOptionRowFormat($this);
        }
    }
}

