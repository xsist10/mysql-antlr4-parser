<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

class LoadXmlStatementContext extends ParserRuleContext
{
    /**
     * @var Token|null $priority
     */
    public $priority;

    /**
     * @var Token|null $filename
     */
    public $filename;

    /**
     * @var Token|null $violation
     */
    public $violation;

    /**
     * @var Token|null $tag
     */
    public $tag;

    /**
     * @var Token|null $linesFormat
     */
    public $linesFormat;

    /**
     * @var CharsetNameContext|null $charset
     */
    public $charset;

    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_loadXmlStatement;
    }

    public function LOAD(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LOAD, 0);
    }

    public function XML(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::XML, 0);
    }

    public function INFILE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INFILE, 0);
    }

    public function INTO(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::INTO, 0);
    }

    public function TABLE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::TABLE, 0);
    }

    public function tableName(): ?TableNameContext
    {
        return $this->getTypedRuleContext(TableNameContext::class, 0);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function STRING_LITERAL(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::STRING_LITERAL);
        }

        return $this->getToken(MySqlParser::STRING_LITERAL, $index);
    }

    public function LOCAL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LOCAL, 0);
    }

    public function CHARACTER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CHARACTER, 0);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function SET(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::SET);
        }

        return $this->getToken(MySqlParser::SET, $index);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function ROWS(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::ROWS);
        }

        return $this->getToken(MySqlParser::ROWS, $index);
    }

    public function IDENTIFIED(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::IDENTIFIED, 0);
    }

    public function BY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::BY, 0);
    }

    public function LESS_SYMBOL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LESS_SYMBOL, 0);
    }

    public function GREATER_SYMBOL(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::GREATER_SYMBOL, 0);
    }

    /**
     * @return array<TerminalNode>|TerminalNode|null
     */
    public function IGNORE(?int $index = null)
    {
        if ($index === null) {
            return $this->getTokens(MySqlParser::IGNORE);
        }

        return $this->getToken(MySqlParser::IGNORE, $index);
    }

    public function decimalLiteral(): ?DecimalLiteralContext
    {
        return $this->getTypedRuleContext(DecimalLiteralContext::class, 0);
    }

    public function LR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LR_BRACKET, 0);
    }

    /**
     * @return array<AssignmentFieldContext>|AssignmentFieldContext|null
     */
    public function assignmentField(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(AssignmentFieldContext::class);
        }

        return $this->getTypedRuleContext(AssignmentFieldContext::class, $index);
    }

    public function RR_BRACKET(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::RR_BRACKET, 0);
    }

    /**
     * @return array<UpdatedElementContext>|UpdatedElementContext|null
     */
    public function updatedElement(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(UpdatedElementContext::class);
        }

        return $this->getTypedRuleContext(UpdatedElementContext::class, $index);
    }

    public function charsetName(): ?CharsetNameContext
    {
        return $this->getTypedRuleContext(CharsetNameContext::class, 0);
    }

    public function LOW_PRIORITY(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LOW_PRIORITY, 0);
    }

    public function CONCURRENT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CONCURRENT, 0);
    }

    public function REPLACE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::REPLACE, 0);
    }

    public function LINES(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::LINES, 0);
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
            $listener->enterLoadXmlStatement($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitLoadXmlStatement($this);
        }
    }
}

