<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class PartitionOptionIndexDirectoryContext extends PartitionOptionContext
{
    /**
     * @var Token|null $indexDirectory
     */
    public $indexDirectory;

    public function __construct(PartitionOptionContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function INDEX(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INDEX, 0);
    }

    public function DIRECTORY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DIRECTORY, 0);
    }

    public function STRING_LITERAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STRING_LITERAL, 0);
    }

    public function EQUAL_SYMBOL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::EQUAL_SYMBOL, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterPartitionOptionIndexDirectory($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitPartitionOptionIndexDirectory($this);
        }
    }
}

