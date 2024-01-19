<?php

declare(strict_types=1);


namespace MySqlAntl4\Context;

use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use MySqlAntl4\MySqlParserListener;

class MysqlVariableExpressionAtomContext extends ExpressionAtomContext
{
    public function __construct(ExpressionAtomContext $context)
    {
        parent::__construct($context);

        $this->copyFrom($context);
    }

    public function mysqlVariable(): ?MysqlVariableContext
    {
        return $this->getTypedRuleContext(MysqlVariableContext::class, 0);
    }

    public function enterRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->enterMysqlVariableExpressionAtom($this);
        }
    }

    public function exitRule(ParseTreeListener $listener): void
    {
        if ($listener instanceof MySqlParserListener) {
            $listener->exitMysqlVariableExpressionAtom($this);
        }
    }
}
