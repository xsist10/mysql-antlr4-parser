<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class CollectionDataTypeContext extends DataTypeContext
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

    public function collectionOptions(): ?CollectionOptionsContext
    {
        return $this->getTypedRuleContext(CollectionOptionsContext::class, 0);
    }

    public function ENUM(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ENUM, 0);
    }

    public function SET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SET, 0);
    }

    public function BINARY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BINARY, 0);
    }

    public function charSet(): ?CharSetContext
    {
        return $this->getTypedRuleContext(CharSetContext::class, 0);
    }

    public function charsetName(): ?CharsetNameContext
    {
        return $this->getTypedRuleContext(CharsetNameContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterCollectionDataType($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitCollectionDataType($this);
        }
    }
}

