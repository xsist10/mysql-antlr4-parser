<?php

declare(strict_types=1);
namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\ParserRuleContext;

class DeclareHandlerContext extends ParserRuleContext
{
    /**
     * @var Token|null $handlerAction
     */
    public $handlerAction;

    public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
    {
        parent::__construct($parent, $invokingState);
    }

    public function getRuleIndex(): int
    {
        return MySqlParser::RULE_declareHandler;
    }

    public function DECLARE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::DECLARE, 0);
    }

    public function HANDLER(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::HANDLER, 0);
    }

    public function FOR(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::FOR, 0);
    }

    /**
     * @return array<HandlerConditionValueContext>|HandlerConditionValueContext|null
     */
    public function handlerConditionValue(?int $index = null)
    {
        if ($index === null) {
            return $this->getTypedRuleContexts(HandlerConditionValueContext::class);
        }

        return $this->getTypedRuleContext(HandlerConditionValueContext::class, $index);
    }

    public function routineBody(): ?RoutineBodyContext
    {
        return $this->getTypedRuleContext(RoutineBodyContext::class, 0);
    }

    public function CONTINUE(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::CONTINUE, 0);
    }

    public function EXIT(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::EXIT, 0);
    }

    public function UNDO(): ?TerminalNode
    {
        return $this->getToken(MySqlParser::UNDO, 0);
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
            $listener->enterDeclareHandler($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitDeclareHandler($this);
        }
    }
}

