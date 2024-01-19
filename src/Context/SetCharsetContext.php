<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class SetCharsetContext extends SetStatementContext
{
    public function __construct(SetStatementContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function SET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SET, 0);
    }

    public function charSet(): ?CharSetContext
    {
        return $this->getTypedRuleContext(CharSetContext::class, 0);
    }

    public function charsetName(): ?CharsetNameContext
    {
        return $this->getTypedRuleContext(CharsetNameContext::class, 0);
    }

    public function DEFAULT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DEFAULT, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterSetCharset($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitSetCharset($this);
        }
    }
}

