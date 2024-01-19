<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Token;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlParserListener;

class SelectIntoTextFileContext extends SelectIntoExpressionContext
{
    /**
     * @var Token|null $filename
     */
    public $filename;

    /**
     * @var Token|null $fieldsFormat
     */
    public $fieldsFormat;

    /**
     * @var CharsetNameContext|null $charset
     */
    public $charset;

    public function __construct(SelectIntoExpressionContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function INTO(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INTO, 0);
    }

    public function OUTFILE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::OUTFILE, 0);
    }

    public function STRING_LITERAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::STRING_LITERAL, 0);
    }

    public function CHARACTER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CHARACTER, 0);
    }

    public function SET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::SET, 0);
    }

    public function LINES(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LINES, 0);
    }

    public function charsetName(): ?CharsetNameContext
    {
        return $this->getTypedRuleContext(CharsetNameContext::class, 0);
    }

    public function FIELDS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FIELDS, 0);
    }

    public function COLUMNS(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::COLUMNS, 0);
    }

    /**
     * @return array<SelectFieldsIntoContext>|SelectFieldsIntoContext|null
     */
    public function selectFieldsInto(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(SelectFieldsIntoContext::class);
        }

        return $this->getTypedRuleContext(SelectFieldsIntoContext::class, $index);
    }

    /**
     * @return array<SelectLinesIntoContext>|SelectLinesIntoContext|null
     */
    public function selectLinesInto(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(SelectLinesIntoContext::class);
        }

        return $this->getTypedRuleContext(SelectLinesIntoContext::class, $index);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterSelectIntoTextFile($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitSelectIntoTextFile($this);
        }
    }
}

