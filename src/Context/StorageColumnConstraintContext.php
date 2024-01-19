<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class StorageColumnConstraintContext extends ColumnConstraintContext
{
    /**
     * @var Token|null $storageval
     */
    public $storageval;

    public function __construct(ColumnConstraintContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function STORAGE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STORAGE, 0);
    }

    public function DISK(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DISK, 0);
    }

    public function MEMORY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MEMORY, 0);
    }

    public function DEFAULT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DEFAULT, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterStorageColumnConstraint($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitStorageColumnConstraint($this);
        }
    }
}

