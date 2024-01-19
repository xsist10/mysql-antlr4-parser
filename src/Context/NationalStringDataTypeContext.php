<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class NationalStringDataTypeContext extends DataTypeContext
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

    public function NATIONAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::NATIONAL, 0);
    }

    public function VARCHAR(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::VARCHAR, 0);
    }

    public function CHARACTER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CHARACTER, 0);
    }

    public function CHAR(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CHAR, 0);
    }

    public function lengthOneDimension(): ?LengthOneDimensionContext
    {
        return $this->getTypedRuleContext(LengthOneDimensionContext::class, 0);
    }

    public function BINARY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BINARY, 0);
    }

    public function NCHAR(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::NCHAR, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterNationalStringDataType($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitNationalStringDataType($this);
        }
    }
}

