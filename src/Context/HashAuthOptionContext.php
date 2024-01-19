<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class HashAuthOptionContext extends UserAuthOptionContext
{
    /**
     * @var Token|null $hashed
     */
    public $hashed;

    public function __construct(UserAuthOptionContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function userName(): ?UserNameContext
    {
        return $this->getTypedRuleContext(UserNameContext::class, 0);
    }

    public function IDENTIFIED(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::IDENTIFIED, 0);
    }

    public function BY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BY, 0);
    }

    public function PASSWORD(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PASSWORD, 0);
    }

    public function STRING_LITERAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STRING_LITERAL, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterHashAuthOption($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitHashAuthOption($this);
        }
    }
}

