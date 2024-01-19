<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class DefaultAuthConnectionOptionContext extends ConnectionOptionContext
{
    /**
     * @var Token|null $conOptDefAuth
     */
    public $conOptDefAuth;

    public function __construct(ConnectionOptionContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function DEFAULT_AUTH(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DEFAULT_AUTH, 0);
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
            $listener->enterDefaultAuthConnectionOption($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitDefaultAuthConnectionOption($this);
        }
    }
}

