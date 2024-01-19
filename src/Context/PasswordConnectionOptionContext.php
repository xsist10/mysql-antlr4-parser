<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class PasswordConnectionOptionContext extends ConnectionOptionContext
{
    /**
     * @var Token|null $conOptPassword
     */
    public $conOptPassword;

    public function __construct(ConnectionOptionContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function PASSWORD(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PASSWORD, 0);
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
            $listener->enterPasswordConnectionOption($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitPasswordConnectionOption($this);
        }
    }
}

