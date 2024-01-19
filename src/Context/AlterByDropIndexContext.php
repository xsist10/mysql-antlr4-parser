<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class AlterByDropIndexContext extends AlterSpecificationContext
{
    /**
     * @var Token|null $indexFormat
     */
    public $indexFormat;

    public function __construct(AlterSpecificationContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function DROP(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DROP, 0);
    }

    public function uid(): ?UidContext
    {
        return $this->getTypedRuleContext(UidContext::class, 0);
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
            $listener->enterAlterByDropIndex($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitAlterByDropIndex($this);
        }
    }
}

