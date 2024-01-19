<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class GlobalPrivLevelContext extends PrivilegeLevelContext
{
    public function __construct(PrivilegeLevelContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function STAR(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::STAR);
        }

        return $this->getToken(MySqlParser::STAR, $index);
    }

    public function DOT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DOT, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterGlobalPrivLevel($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitGlobalPrivLevel($this);
        }
    }
}

