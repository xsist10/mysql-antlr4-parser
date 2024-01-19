<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class AlterByRenameColumnContext extends AlterSpecificationContext
{
    /**
     * @var UidContext|null $oldColumn
     */
    public $oldColumn;

    /**
     * @var UidContext|null $newColumn
     */
    public $newColumn;

    public function __construct(AlterSpecificationContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function RENAME(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RENAME, 0);
    }

    public function COLUMN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::COLUMN, 0);
    }

    public function TO(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TO, 0);
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

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterAlterByRenameColumn($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitAlterByRenameColumn($this);
        }
    }
}

