<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class MasterRealOptionContext extends MasterOptionContext
{
    public function __construct(MasterOptionContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function MASTER_HEARTBEAT_PERIOD(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MASTER_HEARTBEAT_PERIOD, 0);
    }

    public function EQUAL_SYMBOL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::EQUAL_SYMBOL, 0);
    }

    public function REAL_LITERAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::REAL_LITERAL, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterMasterRealOption($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitMasterRealOption($this);
        }
    }
}

