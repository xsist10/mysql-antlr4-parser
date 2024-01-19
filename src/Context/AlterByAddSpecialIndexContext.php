<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class AlterByAddSpecialIndexContext extends AlterSpecificationContext
{
    /**
     * @var Token|null $keyType
     */
    public $keyType;

    /**
     * @var Token|null $indexFormat
     */
    public $indexFormat;

    public function __construct(AlterSpecificationContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function ADD(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ADD, 0);
    }

    public function indexColumnNames(): ?IndexColumnNamesContext
    {
        return $this->getTypedRuleContext(IndexColumnNamesContext::class, 0);
    }

    public function FULLTEXT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FULLTEXT, 0);
    }

    public function SPATIAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SPATIAL, 0);
    }

    public function uid(): ?UidContext
    {
        return $this->getTypedRuleContext(UidContext::class, 0);
    }

    /**
     * @return array<IndexOptionContext>|IndexOptionContext|null
     */
    public function indexOption(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(IndexOptionContext::class);
        }

        return $this->getTypedRuleContext(IndexOptionContext::class, $index);
    }

    public function INDEX(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INDEX, 0);
    }

    public function KEY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::KEY, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterAlterByAddSpecialIndex($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitAlterByAddSpecialIndex($this);
        }
    }
}

