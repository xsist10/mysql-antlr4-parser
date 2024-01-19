<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class ShowEngineContext extends ShowStatementContext
{
    /**
     * @var Token|null $engineOption
     */
    public $engineOption;

    public function __construct(ShowStatementContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function SHOW(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SHOW, 0);
    }

    public function ENGINE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ENGINE, 0);
    }

    public function engineName(): ?EngineNameContext
    {
        return $this->getTypedRuleContext(EngineNameContext::class, 0);
    }

    public function STATUS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STATUS, 0);
    }

    public function MUTEX(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MUTEX, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterShowEngine($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitShowEngine($this);
        }
    }
}

