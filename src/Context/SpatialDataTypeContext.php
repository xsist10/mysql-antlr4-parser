<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class SpatialDataTypeContext extends DataTypeContext
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

    public function GEOMETRYCOLLECTION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::GEOMETRYCOLLECTION, 0);
    }

    public function GEOMCOLLECTION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::GEOMCOLLECTION, 0);
    }

    public function LINESTRING(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LINESTRING, 0);
    }

    public function MULTILINESTRING(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MULTILINESTRING, 0);
    }

    public function MULTIPOINT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MULTIPOINT, 0);
    }

    public function MULTIPOLYGON(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MULTIPOLYGON, 0);
    }

    public function POINT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::POINT, 0);
    }

    public function POLYGON(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::POLYGON, 0);
    }

    public function JSON(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::JSON, 0);
    }

    public function GEOMETRY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::GEOMETRY, 0);
    }

    public function SRID(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SRID, 0);
    }

    public function decimalLiteral(): ?DecimalLiteralContext
    {
        return $this->getTypedRuleContext(DecimalLiteralContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterSpatialDataType($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitSpatialDataType($this);
        }
    }
}

