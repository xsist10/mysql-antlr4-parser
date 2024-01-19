<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class DefiniteSchemaPrivLevelContext extends PrivilegeLevelContext
{
    public function __construct(PrivilegeLevelContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function uid(): ?UidContext
    {
        return $this->getTypedRuleContext(UidContext::class, 0);
    }

    public function DOT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DOT, 0);
    }

    public function STAR(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STAR, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterDefiniteSchemaPrivLevel($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitDefiniteSchemaPrivLevel($this);
        }
    }
}

