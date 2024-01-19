<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class FormatColumnConstraintContext extends ColumnConstraintContext
{
    /**
     * @var Token|null $colformat
     */
    public $colformat;

    public function __construct(ColumnConstraintContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function COLUMN_FORMAT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::COLUMN_FORMAT, 0);
    }

    public function FIXED(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FIXED, 0);
    }

    public function DYNAMIC(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DYNAMIC, 0);
    }

    public function DEFAULT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DEFAULT, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterFormatColumnConstraint($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitFormatColumnConstraint($this);
        }
    }
}

