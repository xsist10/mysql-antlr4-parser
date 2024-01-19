<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class ShowIndexesContext extends ShowStatementContext
{
    /**
     * @var Token|null $indexFormat
     */
    public $indexFormat;

    /**
     * @var Token|null $tableFormat
     */
    public $tableFormat;

    /**
     * @var Token|null $schemaFormat
     */
    public $schemaFormat;

    public function __construct(ShowStatementContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function SHOW(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SHOW, 0);
    }

    public function tableName(): ?TableNameContext
    {
        return $this->getTypedRuleContext(TableNameContext::class, 0);
    }

    public function INDEX(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INDEX, 0);
    }

    public function INDEXES(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INDEXES, 0);
    }

    public function KEYS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::KEYS, 0);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function FROM(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::FROM);
        }

        return $this->getToken(MySqlParser::FROM, $index);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function IN(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::IN);
        }

        return $this->getToken(MySqlParser::IN, $index);
    }

    public function uid(): ?UidContext
    {
        return $this->getTypedRuleContext(UidContext::class, 0);
    }

    public function WHERE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::WHERE, 0);
    }

    public function expression(): ?ExpressionContext
    {
        return $this->getTypedRuleContext(ExpressionContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterShowIndexes($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitShowIndexes($this);
        }
    }
}

