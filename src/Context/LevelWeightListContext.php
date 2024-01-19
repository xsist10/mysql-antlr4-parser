<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class LevelWeightListContext extends LevelsInWeightStringContext
{
    public function __construct(LevelsInWeightStringContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function LEVEL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LEVEL, 0);
    }

    /**
     * @return array<LevelInWeightListElementContext>|LevelInWeightListElementContext|null
     */
    public function levelInWeightListElement(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(LevelInWeightListElementContext::class);
        }

        return $this->getTypedRuleContext(LevelInWeightListElementContext::class, $index);
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
            $listener->enterLevelWeightList($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitLevelWeightList($this);
        }
    }
}

