<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class LevelWeightRangeContext extends LevelsInWeightStringContext
{
    /**
     * @var DecimalLiteralContext|null $firstLevel
     */
    public $firstLevel;

    /**
     * @var DecimalLiteralContext|null $lastLevel
     */
    public $lastLevel;

    public function __construct(LevelsInWeightStringContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function LEVEL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LEVEL, 0);
    }

    public function MINUS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::MINUS, 0);
    }

    /**
     * @return array<DecimalLiteralContext>|DecimalLiteralContext|null
     */
    public function decimalLiteral(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(DecimalLiteralContext::class);
        }

        return $this->getTypedRuleContext(DecimalLiteralContext::class, $index);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterLevelWeightRange($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitLevelWeightRange($this);
        }
    }
}

