<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class DefiniteFullTablePrivLevelContext extends PrivilegeLevelContext
{
    public function __construct(PrivilegeLevelContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    /**
     * @return array<UidContext>|UidContext|null
     */
    public function uid(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(UidContext::class);
        }

        return $this->getTypedRuleContext(UidContext::class, $index);
    }

    public function DOT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DOT, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterDefiniteFullTablePrivLevel($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitDefiniteFullTablePrivLevel($this);
        }
    }
}

