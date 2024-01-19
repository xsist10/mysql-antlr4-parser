<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class AlterByConvertCharsetContext extends AlterSpecificationContext
{
    public function __construct(AlterSpecificationContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function CONVERT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CONVERT, 0);
    }

    public function TO(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TO, 0);
    }

    public function charsetName(): ?CharsetNameContext
    {
        return $this->getTypedRuleContext(CharsetNameContext::class, 0);
    }

    public function CHARSET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CHARSET, 0);
    }

    public function CHARACTER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CHARACTER, 0);
    }

    public function SET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SET, 0);
    }

    public function COLLATE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::COLLATE, 0);
    }

    public function collationName(): ?CollationNameContext
    {
        return $this->getTypedRuleContext(CollationNameContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterAlterByConvertCharset($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitAlterByConvertCharset($this);
        }
    }
}

