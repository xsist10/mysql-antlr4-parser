<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class TableOptionKeyBlockSizeContext extends TableOptionContext
{
    public function __construct(TableOptionContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function KEY_BLOCK_SIZE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::KEY_BLOCK_SIZE, 0);
    }

    public function fileSizeLiteral(): ?FileSizeLiteralContext
    {
        return $this->getTypedRuleContext(FileSizeLiteralContext::class, 0);
    }

    public function EQUAL_SYMBOL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::EQUAL_SYMBOL, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterTableOptionKeyBlockSize($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitTableOptionKeyBlockSize($this);
        }
    }
}

