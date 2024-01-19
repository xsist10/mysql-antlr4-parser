<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class ShowColumnsContext extends ShowStatementContext
{
    /**
     * @var Token|null $columnsFormat
     */
    public $columnsFormat;

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

    public function COLUMNS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::COLUMNS, 0);
    }

    public function FIELDS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FIELDS, 0);
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

    public function FULL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FULL, 0);
    }

    public function uid(): ?UidContext
    {
        return $this->getTypedRuleContext(UidContext::class, 0);
    }

    public function showFilter(): ?ShowFilterContext
    {
        return $this->getTypedRuleContext(ShowFilterContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterShowColumns($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitShowColumns($this);
        }
    }
}

