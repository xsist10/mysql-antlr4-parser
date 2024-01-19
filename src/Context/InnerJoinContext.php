<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class InnerJoinContext extends JoinPartContext
{
    public function __construct(JoinPartContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function JOIN(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::JOIN, 0);
    }

    public function tableSourceItem(): ?TableSourceItemContext
    {
        return $this->getTypedRuleContext(TableSourceItemContext::class, 0);
    }

    public function LATERAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LATERAL, 0);
    }

    /**
     * @return array<JoinSpecContext>|JoinSpecContext|null
     */
    public function joinSpec(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(JoinSpecContext::class);
        }

        return $this->getTypedRuleContext(JoinSpecContext::class, $index);
    }

    public function INNER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INNER, 0);
    }

    public function CROSS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CROSS, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterInnerJoin($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitInnerJoin($this);
        }
    }
}

