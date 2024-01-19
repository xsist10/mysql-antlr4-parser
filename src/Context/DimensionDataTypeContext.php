<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class DimensionDataTypeContext extends DataTypeContext
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

    public function TINYINT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TINYINT, 0);
    }

    public function SMALLINT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SMALLINT, 0);
    }

    public function MEDIUMINT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MEDIUMINT, 0);
    }

    public function INT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INT, 0);
    }

    public function INTEGER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INTEGER, 0);
    }

    public function BIGINT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BIGINT, 0);
    }

    public function MIDDLEINT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MIDDLEINT, 0);
    }

    public function INT1(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INT1, 0);
    }

    public function INT2(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INT2, 0);
    }

    public function INT3(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INT3, 0);
    }

    public function INT4(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INT4, 0);
    }

    public function INT8(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INT8, 0);
    }

    public function lengthOneDimension(): ?LengthOneDimensionContext
    {
        return $this->getTypedRuleContext(LengthOneDimensionContext::class, 0);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function SIGNED(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::SIGNED);
        }

        return $this->getToken(MySqlParser::SIGNED, $index);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function UNSIGNED(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::UNSIGNED);
        }

        return $this->getToken(MySqlParser::UNSIGNED, $index);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function ZEROFILL(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::ZEROFILL);
        }

        return $this->getToken(MySqlParser::ZEROFILL, $index);
    }

    public function REAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::REAL, 0);
    }

    public function lengthTwoDimension(): ?LengthTwoDimensionContext
    {
        return $this->getTypedRuleContext(LengthTwoDimensionContext::class, 0);
    }

    public function DOUBLE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DOUBLE, 0);
    }

    public function PRECISION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PRECISION, 0);
    }

    public function DECIMAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DECIMAL, 0);
    }

    public function DEC(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DEC, 0);
    }

    public function FIXED(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FIXED, 0);
    }

    public function NUMERIC(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::NUMERIC, 0);
    }

    public function FLOAT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FLOAT, 0);
    }

    public function FLOAT4(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FLOAT4, 0);
    }

    public function FLOAT8(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FLOAT8, 0);
    }

    public function lengthTwoOptionalDimension(): ?LengthTwoOptionalDimensionContext
    {
        return $this->getTypedRuleContext(LengthTwoOptionalDimensionContext::class, 0);
    }

    public function BIT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BIT, 0);
    }

    public function TIME(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TIME, 0);
    }

    public function TIMESTAMP(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TIMESTAMP, 0);
    }

    public function DATETIME(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DATETIME, 0);
    }

    public function BINARY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BINARY, 0);
    }

    public function VARBINARY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::VARBINARY, 0);
    }

    public function BLOB(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BLOB, 0);
    }

    public function YEAR(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::YEAR, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterDimensionDataType($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitDimensionDataType($this);
        }
    }
}

