<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class BoolMasterOptionContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_boolMasterOption;
    }

    public function MASTER_AUTO_POSITION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MASTER_AUTO_POSITION, 0);
    }

    public function MASTER_SSL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MASTER_SSL, 0);
    }

    public function MASTER_SSL_VERIFY_SERVER_CERT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MASTER_SSL_VERIFY_SERVER_CERT, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterBoolMasterOption($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitBoolMasterOption($this);
        }
    }
}

