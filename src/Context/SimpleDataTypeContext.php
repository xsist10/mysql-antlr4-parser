<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class SimpleDataTypeContext extends DataTypeContext
{
    /**
     * @var Token|null $typeName
     */
    public $typeName;

    public function __construct(DataTypeContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function DATE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DATE, 0);
    }

    public function TINYBLOB(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TINYBLOB, 0);
    }

    public function MEDIUMBLOB(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MEDIUMBLOB, 0);
    }

    public function LONGBLOB(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LONGBLOB, 0);
    }

    public function BOOL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BOOL, 0);
    }

    public function BOOLEAN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BOOLEAN, 0);
    }

    public function SERIAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SERIAL, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterSimpleDataType($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitSimpleDataType($this);
        }
    }
}

