<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class SelectElementsContext extends ParserRuleContext
{
    /**
     * @var Token|null $star
     */
    public $star;

    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_selectElements;
    }

    /**
     * @return array<SelectElementContext>|SelectElementContext|null
     */
    public function selectElement(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(SelectElementContext::class);
        }

        return $this->getTypedRuleContext(SelectElementContext::class, $index);
    }

    public function STAR(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STAR, 0);
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
            $listener->enterSelectElements($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitSelectElements($this);
        }
    }
}

