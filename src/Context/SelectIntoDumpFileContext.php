<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class SelectIntoDumpFileContext extends SelectIntoExpressionContext
{
    public function __construct(SelectIntoExpressionContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function INTO(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INTO, 0);
    }

    public function DUMPFILE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DUMPFILE, 0);
    }

    public function STRING_LITERAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STRING_LITERAL, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterSelectIntoDumpFile($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitSelectIntoDumpFile($this);
        }
    }
}

