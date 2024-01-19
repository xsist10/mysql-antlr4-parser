<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

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

