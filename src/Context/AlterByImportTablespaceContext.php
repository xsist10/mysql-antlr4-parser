<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class AlterByImportTablespaceContext extends AlterSpecificationContext
{
    public function __construct(AlterSpecificationContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function IMPORT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::IMPORT, 0);
    }

    public function TABLESPACE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TABLESPACE, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterAlterByImportTablespace($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitAlterByImportTablespace($this);
        }
    }
}

