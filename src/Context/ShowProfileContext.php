<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class ShowProfileContext extends ShowStatementContext
{
    /**
     * @var DecimalLiteralContext|null $queryCount
     */
    public $queryCount;

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

    public function PROFILE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PROFILE, 0);
    }

    /**
     * @return array<ShowProfileTypeContext>|ShowProfileTypeContext|null
     */
    public function showProfileType(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(ShowProfileTypeContext::class);
        }

        return $this->getTypedRuleContext(ShowProfileTypeContext::class, $index);
    }

    public function LIMIT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LIMIT, 0);
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

    public function FOR(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FOR, 0);
    }

    public function QUERY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::QUERY, 0);
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

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterShowProfile($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitShowProfile($this);
        }
    }
}

