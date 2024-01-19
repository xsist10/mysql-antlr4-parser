<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class StringDataTypeContext extends DataTypeContext
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

    public function CHAR(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CHAR, 0);
    }

    public function CHARACTER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CHARACTER, 0);
    }

    public function VARCHAR(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::VARCHAR, 0);
    }

    public function TINYTEXT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TINYTEXT, 0);
    }

    public function TEXT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TEXT, 0);
    }

    public function MEDIUMTEXT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MEDIUMTEXT, 0);
    }

    public function LONGTEXT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LONGTEXT, 0);
    }

    public function NCHAR(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::NCHAR, 0);
    }

    public function NVARCHAR(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::NVARCHAR, 0);
    }

    public function LONG(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LONG, 0);
    }

    public function VARYING(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::VARYING, 0);
    }

    public function lengthOneDimension(): ?LengthOneDimensionContext
    {
        return $this->getTypedRuleContext(LengthOneDimensionContext::class, 0);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function BINARY(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::BINARY);
        }

        return $this->getToken(MySqlParser::BINARY, $index);
    }

    public function charSet(): ?CharSetContext
    {
        return $this->getTypedRuleContext(CharSetContext::class, 0);
    }

    public function charsetName(): ?CharsetNameContext
    {
        return $this->getTypedRuleContext(CharsetNameContext::class, 0);
    }

    public function COLLATE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::COLLATE, 0);
    }

    public function collationName(): ?CollationNameContext
    {
        return $this->getTypedRuleContext(CollationNameContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterStringDataType($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitStringDataType($this);
        }
    }
}

