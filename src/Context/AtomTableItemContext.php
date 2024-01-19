<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class AtomTableItemContext extends TableSourceItemContext
{
    /**
     * @var UidContext|null $alias
     */
    public $alias;

    public function __construct(TableSourceItemContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function tableName(): ?TableNameContext
    {
        return $this->getTypedRuleContext(TableNameContext::class, 0);
    }

    public function PARTITION(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::PARTITION, 0);
    }

    public function LR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LR_BRACKET, 0);
    }

    public function uidList(): ?UidListContext
    {
        return $this->getTypedRuleContext(UidListContext::class, 0);
    }

    public function RR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RR_BRACKET, 0);
    }

    /**
     * @return array<IndexHintContext>|IndexHintContext|null
     */
    public function indexHint(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(IndexHintContext::class);
        }

        return $this->getTypedRuleContext(IndexHintContext::class, $index);
    }

    public function uid(): ?UidContext
    {
        return $this->getTypedRuleContext(UidContext::class, 0);
    }

    public function AS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::AS, 0);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function COMMA(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::COMMA);
        }

        return $this->getToken(MySqlParser::COMMA, $index);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterAtomTableItem($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitAtomTableItem($this);
        }
    }
}

