<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class UserConnectionOptionContext extends ConnectionOptionContext
{
    /**
     * @var Token|null $conOptUser
     */
    public $conOptUser;

    public function __construct(ConnectionOptionContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function USER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::USER, 0);
    }

    public function EQUAL_SYMBOL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::EQUAL_SYMBOL, 0);
    }

    public function STRING_LITERAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STRING_LITERAL, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterUserConnectionOption($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitUserConnectionOption($this);
        }
    }
}

