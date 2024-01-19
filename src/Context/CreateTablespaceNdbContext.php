<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class CreateTablespaceNdbContext extends ParserRuleContext
{
    /**
     * @var Token|null $datafile
     */
    public $datafile;

    /**
     * @var Token|null $comment
     */
    public $comment;

    /**
     * @var FileSizeLiteralContext|null $extentSize
     */
    public $extentSize;

    /**
     * @var FileSizeLiteralContext|null $initialSize
     */
    public $initialSize;

    /**
     * @var FileSizeLiteralContext|null $autoextendSize
     */
    public $autoextendSize;

    /**
     * @var FileSizeLiteralContext|null $maxSize
     */
    public $maxSize;

    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_createTablespaceNdb;
    }

    public function CREATE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CREATE, 0);
    }

    public function TABLESPACE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TABLESPACE, 0);
    }

    /**
     * @return array<UidContext>|UidContext|null
     */
    public function uid(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(UidContext::class);
        }

        return $this->getTypedRuleContext(UidContext::class, $index);
    }

    public function ADD(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ADD, 0);
    }

    public function DATAFILE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DATAFILE, 0);
    }

    public function USE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::USE, 0);
    }

    public function LOGFILE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LOGFILE, 0);
    }

    public function GROUP(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::GROUP, 0);
    }

    public function ENGINE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ENGINE, 0);
    }

    public function engineName(): ?EngineNameContext
    {
        return $this->getTypedRuleContext(EngineNameContext::class, 0);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function STRING_LITERAL(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::STRING_LITERAL);
        }

        return $this->getToken(MySqlParser::STRING_LITERAL, $index);
    }

    public function EXTENT_SIZE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::EXTENT_SIZE, 0);
    }

    public function INITIAL_SIZE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INITIAL_SIZE, 0);
    }

    public function AUTOEXTEND_SIZE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::AUTOEXTEND_SIZE, 0);
    }

    public function MAX_SIZE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MAX_SIZE, 0);
    }

    public function NODEGROUP(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::NODEGROUP, 0);
    }

    public function WAIT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::WAIT, 0);
    }

    public function COMMENT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::COMMENT, 0);
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

    /**
     * @return array<FileSizeLiteralContext>|FileSizeLiteralContext|null
     */
    public function fileSizeLiteral(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(FileSizeLiteralContext::class);
        }

        return $this->getTypedRuleContext(FileSizeLiteralContext::class, $index);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterCreateTablespaceNdb($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitCreateTablespaceNdb($this);
        }
    }
}

