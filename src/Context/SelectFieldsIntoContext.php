<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class SelectFieldsIntoContext extends ParserRuleContext
{
    /**
     * @var Token|null $terminationField
     */
    public $terminationField;

    /**
     * @var Token|null $enclosion
     */
    public $enclosion;

    /**
     * @var Token|null $escaping
     */
    public $escaping;

    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_selectFieldsInto;
    }

    public function TERMINATED(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TERMINATED, 0);
    }

    public function BY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BY, 0);
    }

    public function STRING_LITERAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STRING_LITERAL, 0);
    }

    public function ENCLOSED(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ENCLOSED, 0);
    }

    public function OPTIONALLY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::OPTIONALLY, 0);
    }

    public function ESCAPED(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ESCAPED, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterSelectFieldsInto($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitSelectFieldsInto($this);
        }
    }
}

