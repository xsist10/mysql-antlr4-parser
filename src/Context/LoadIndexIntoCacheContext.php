<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class LoadIndexIntoCacheContext extends ParserRuleContext
{
    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_loadIndexIntoCache;
    }

    public function LOAD(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LOAD, 0);
    }

    public function INDEX(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INDEX, 0);
    }

    public function INTO(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INTO, 0);
    }

    public function CACHE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CACHE, 0);
    }

    /**
     * @return array<LoadedTableIndexesContext>|LoadedTableIndexesContext|null
     */
    public function loadedTableIndexes(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(LoadedTableIndexesContext::class);
        }

        return $this->getTypedRuleContext(LoadedTableIndexesContext::class, $index);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function COMMA(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::COMMA);
        }

        return $this->getToken(MySqlParser::COMMA, $index);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterLoadIndexIntoCache($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitLoadIndexIntoCache($this);
        }
    }
}

