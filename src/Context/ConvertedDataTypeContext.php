<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class ConvertedDataTypeContext extends ParserRuleContext
{
    /**
     * @var Token|null $typeName
     */
    public $typeName;

    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_convertedDataType;
    }

    public function CHAR(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CHAR, 0);
    }

    public function SIGNED(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SIGNED, 0);
    }

    public function UNSIGNED(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::UNSIGNED, 0);
    }

    public function ARRAY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ARRAY, 0);
    }

    public function BINARY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BINARY, 0);
    }

    public function NCHAR(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::NCHAR, 0);
    }

    public function FLOAT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FLOAT, 0);
    }

    public function DATE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DATE, 0);
    }

    public function DATETIME(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DATETIME, 0);
    }

    public function TIME(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TIME, 0);
    }

    public function YEAR(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::YEAR, 0);
    }

    public function JSON(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::JSON, 0);
    }

    public function INT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INT, 0);
    }

    public function INTEGER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INTEGER, 0);
    }

    public function DOUBLE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DOUBLE, 0);
    }

    public function DECIMAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DECIMAL, 0);
    }

    public function DEC(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DEC, 0);
    }

    public function lengthOneDimension(): ?LengthOneDimensionContext
    {
        return $this->getTypedRuleContext(LengthOneDimensionContext::class, 0);
    }

    public function charSet(): ?CharSetContext
    {
        return $this->getTypedRuleContext(CharSetContext::class, 0);
    }

    public function charsetName(): ?CharsetNameContext
    {
        return $this->getTypedRuleContext(CharsetNameContext::class, 0);
    }

    public function lengthTwoOptionalDimension(): ?LengthTwoOptionalDimensionContext
    {
        return $this->getTypedRuleContext(LengthTwoOptionalDimensionContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterConvertedDataType($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitConvertedDataType($this);
        }
    }
}

