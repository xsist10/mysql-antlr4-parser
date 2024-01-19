<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class RollbackWorkContext extends ParserRuleContext
{
    /**
     * @var Token|null $nochain
     */
    public $nochain;

    /**
     * @var Token|null $norelease
     */
    public $norelease;

    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_rollbackWork;
    }

    public function ROLLBACK(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ROLLBACK, 0);
    }

    public function WORK(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::WORK, 0);
    }

    public function AND(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::AND, 0);
    }

    public function CHAIN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CHAIN, 0);
    }

    public function RELEASE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RELEASE, 0);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function NO(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::NO);
        }

        return $this->getToken(MySqlParser::NO, $index);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterRollbackWork($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitRollbackWork($this);
        }
    }
}

