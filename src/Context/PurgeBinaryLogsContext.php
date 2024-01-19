<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class PurgeBinaryLogsContext extends ParserRuleContext
{
    /**
     * @var Token|null $purgeFormat
     */
    public $purgeFormat;

    /**
     * @var Token|null $fileName
     */
    public $fileName;

    /**
     * @var Token|null $timeValue
     */
    public $timeValue;

    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_purgeBinaryLogs;
    }

    public function PURGE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PURGE, 0);
    }

    public function LOGS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LOGS, 0);
    }

    public function BINARY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BINARY, 0);
    }

    public function MASTER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MASTER, 0);
    }

    public function TO(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TO, 0);
    }

    public function BEFORE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BEFORE, 0);
    }

    public function STRING_LITERAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STRING_LITERAL, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterPurgeBinaryLogs($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitPurgeBinaryLogs($this);
        }
    }
}

