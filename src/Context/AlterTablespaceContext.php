<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class AlterTablespaceContext extends ParserRuleContext
{
    /**
     * @var Token|null $objectAction
     */
    public $objectAction;

    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_alterTablespace;
    }

    public function ALTER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ALTER, 0);
    }

    public function TABLESPACE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TABLESPACE, 0);
    }

    public function uid(): ?UidContext
    {
        return $this->getTypedRuleContext(UidContext::class, 0);
    }

    public function DATAFILE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DATAFILE, 0);
    }

    public function STRING_LITERAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STRING_LITERAL, 0);
    }

    public function ENGINE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ENGINE, 0);
    }

    public function engineName(): ?EngineNameContext
    {
        return $this->getTypedRuleContext(EngineNameContext::class, 0);
    }

    public function ADD(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ADD, 0);
    }

    public function DROP(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DROP, 0);
    }

    public function INITIAL_SIZE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INITIAL_SIZE, 0);
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

    public function fileSizeLiteral(): ?FileSizeLiteralContext
    {
        return $this->getTypedRuleContext(FileSizeLiteralContext::class, 0);
    }

    public function WAIT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::WAIT, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterAlterTablespace($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitAlterTablespace($this);
        }
    }
}

