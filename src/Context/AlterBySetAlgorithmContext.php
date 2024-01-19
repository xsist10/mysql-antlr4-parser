<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class AlterBySetAlgorithmContext extends AlterSpecificationContext
{
    /**
     * @var Token|null $algType
     */
    public $algType;

    public function __construct(AlterSpecificationContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function ALGORITHM(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::ALGORITHM, 0);
    }

    public function DEFAULT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DEFAULT, 0);
    }

    public function INSTANT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INSTANT, 0);
    }

    public function INPLACE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INPLACE, 0);
    }

    public function COPY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::COPY, 0);
    }

    public function EQUAL_SYMBOL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::EQUAL_SYMBOL, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterAlterBySetAlgorithm($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitAlterBySetAlgorithm($this);
        }
    }
}

