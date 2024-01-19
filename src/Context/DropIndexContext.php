<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class DropIndexContext extends ParserRuleContext
{
    /**
     * @var Token|null $intimeAction
     */
    public $intimeAction;

    /**
     * @var Token|null $algType
     */
    public $algType;

    /**
     * @var Token|null $lockType
     */
    public $lockType;

    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_dropIndex;
    }

    public function DROP(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DROP, 0);
    }

    public function INDEX(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INDEX, 0);
    }

    public function uid(): ?UidContext
    {
        return $this->getTypedRuleContext(UidContext::class, 0);
    }

    public function ON(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ON, 0);
    }

    public function tableName(): ?TableNameContext
    {
        return $this->getTypedRuleContext(TableNameContext::class, 0);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function ALGORITHM(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::ALGORITHM);
        }

        return $this->getToken(MySqlParser::ALGORITHM, $index);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function LOCK(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::LOCK);
        }

        return $this->getToken(MySqlParser::LOCK, $index);
    }

    public function ONLINE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ONLINE, 0);
    }

    public function OFFLINE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::OFFLINE, 0);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function DEFAULT(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::DEFAULT);
        }

        return $this->getToken(MySqlParser::DEFAULT, $index);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function INPLACE(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::INPLACE);
        }

        return $this->getToken(MySqlParser::INPLACE, $index);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function COPY(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::COPY);
        }

        return $this->getToken(MySqlParser::COPY, $index);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function NONE(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::NONE);
        }

        return $this->getToken(MySqlParser::NONE, $index);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function SHARED(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::SHARED);
        }

        return $this->getToken(MySqlParser::SHARED, $index);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function EXCLUSIVE(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::EXCLUSIVE);
        }

        return $this->getToken(MySqlParser::EXCLUSIVE, $index);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function EQUAL_SYMBOL(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::EQUAL_SYMBOL);
        }

        return $this->getToken(MySqlParser::EQUAL_SYMBOL, $index);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterDropIndex($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitDropIndex($this);
        }
    }
}

