<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class AlterByLockContext extends AlterSpecificationContext
{
    /**
     * @var Token|null $lockType
     */
    public $lockType;

    public function __construct(AlterSpecificationContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function LOCK(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LOCK, 0);
    }

    public function DEFAULT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DEFAULT, 0);
    }

    public function NONE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::NONE, 0);
    }

    public function SHARED(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SHARED, 0);
    }

    public function EXCLUSIVE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::EXCLUSIVE, 0);
    }

    public function EQUAL_SYMBOL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::EQUAL_SYMBOL, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterAlterByLock($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitAlterByLock($this);
        }
    }
}

