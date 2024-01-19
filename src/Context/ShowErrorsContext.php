<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class ShowErrorsContext extends ShowStatementContext
{
    /**
     * @var Token|null $errorFormat
     */
    public $errorFormat;

    /**
     * @var DecimalLiteralContext|null $offset
     */
    public $offset;

    /**
     * @var DecimalLiteralContext|null $rowCount
     */
    public $rowCount;

    public function __construct(ShowStatementContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function SHOW(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SHOW, 0);
    }

    public function ERRORS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ERRORS, 0);
    }

    public function WARNINGS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::WARNINGS, 0);
    }

    public function LIMIT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LIMIT, 0);
    }

    /**
     * @return array<DecimalLiteralContext>|DecimalLiteralContext|null
     */
    public function decimalLiteral(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(DecimalLiteralContext::class);
        }

        return $this->getTypedRuleContext(DecimalLiteralContext::class, $index);
    }

    public function COMMA(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::COMMA, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterShowErrors($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitShowErrors($this);
        }
    }
}

