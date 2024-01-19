<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class ReferenceActionContext extends ParserRuleContext
{
    /**
     * @var ReferenceControlTypeContext|null $onDelete
     */
    public $onDelete;

    /**
     * @var ReferenceControlTypeContext|null $onUpdate
     */
    public $onUpdate;

    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_referenceAction;
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function ON(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::ON);
        }

        return $this->getToken(MySqlParser::ON, $index);
    }

    public function DELETE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DELETE, 0);
    }

    /**
     * @return array<ReferenceControlTypeContext>|ReferenceControlTypeContext|null
     */
    public function referenceControlType(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(ReferenceControlTypeContext::class);
        }

        return $this->getTypedRuleContext(ReferenceControlTypeContext::class, $index);
    }

    public function UPDATE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::UPDATE, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterReferenceAction($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitReferenceAction($this);
        }
    }
}

