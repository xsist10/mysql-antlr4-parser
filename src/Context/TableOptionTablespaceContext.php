<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class TableOptionTablespaceContext extends TableOptionContext
{
    public function __construct(TableOptionContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function TABLESPACE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TABLESPACE, 0);
    }

    public function uid(): ?UidContext
    {
        return $this->getTypedRuleContext(UidContext::class, 0);
    }

    public function tablespaceStorage(): ?TablespaceStorageContext
    {
        return $this->getTypedRuleContext(TablespaceStorageContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterTableOptionTablespace($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitTableOptionTablespace($this);
        }
    }
}

