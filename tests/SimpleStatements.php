<?php

declare(strict_types=1);


use Antlr\Antlr4\Runtime\CommonTokenStream;
use Antlr\Antlr4\Runtime\Error\Listeners\DiagnosticErrorListener;
use Antlr\Antlr4\Runtime\InputStream;
use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Tree\ErrorNode;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\ParseTreeWalker;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;
use MySqlAntl4\MySqlParser;
use MySqlAntl4\MySqlLexer;
use PHPUnit\Framework\TestCase;

final class TreeShapeListener implements ParseTreeListener {
    protected $contexts = [
        [
            "class" => "MySqlAntl4\Context\RootContext",
            "query" => "SELECT*FROM`table`WHEREa=1<EOF>",
        ],
        [
            "class" => "MySqlAntl4\Context\SqlStatementsContext",
            "query" => "SELECT*FROM`table`WHEREa=1",
        ],
        [
        "class" => "MySqlAntl4\Context\SqlStatementContext",
            "query" => "SELECT*FROM`table`WHEREa=1",
        ],
        [
            "class" => "MySqlAntl4\Context\DmlStatementContext",
            "query" => "SELECT*FROM`table`WHEREa=1",
        ],
        [
            "class" => "MySqlAntl4\Context\SimpleSelectContext",
            "query" => "SELECT*FROM`table`WHEREa=1",
        ],
        [
            "class" => "MySqlAntl4\Context\QuerySpecificationContext",
            "query" => "SELECT*FROM`table`WHEREa=1",
        ],
        [
            "class" => "MySqlAntl4\Context\SelectElementsContext",
            "query" => "*",
        ],
        [
            "class" => "MySqlAntl4\Context\FromClauseContext",
            "query" => "FROM`table`WHEREa=1",
        ],
        [
            "class" => "MySqlAntl4\Context\TableSourcesContext",
            "query" => "`table`",
        ],
        [
            "class" => "MySqlAntl4\Context\TableSourceBaseContext",
            "query" => "`table`",
        ],
        [
            "class" => "MySqlAntl4\Context\AtomTableItemContext",
            "query" => "`table`",
        ],
        [
            "class" => "MySqlAntl4\Context\TableNameContext",
            "query" => "`table`",
        ],
        [
            "class" => "MySqlAntl4\Context\FullIdContext",
            "query" => "`table`",
        ],
        [
            "class" => "MySqlAntl4\Context\UidContext",
            "query" => "`table`",
        ],
        [
            "class" => "MySqlAntl4\Context\PredicateExpressionContext",
            "query" => "a=1",
        ],
        [
            "class" => "MySqlAntl4\Context\BinaryComparisonPredicateContext",
            "query" => "a=1",
        ],
        [
            "class" => "MySqlAntl4\Context\ExpressionAtomPredicateContext",
            "query" => "a",
        ],
        [
            "class" => "MySqlAntl4\Context\FullColumnNameExpressionAtomContext",
            "query" => "a",
        ],
        [
            "class" => "MySqlAntl4\Context\FullColumnNameContext",
            "query" => "a",
        ],
        [
            "class" => "MySqlAntl4\Context\UidContext",
            "query" => "a",
        ],
        [
            "class" => "MySqlAntl4\Context\SimpleIdContext",
            "query" => "a",
        ],
        [
            "class" => "MySqlAntl4\Context\ComparisonOperatorContext",
            "query" => "=",
        ],
        [
            "class" => "MySqlAntl4\Context\ExpressionAtomPredicateContext",
            "query" => "1",
        ],
        [
            "class" => "MySqlAntl4\Context\ConstantExpressionAtomContext",
            "query" => "1",
        ],
        [
            "class" => "MySqlAntl4\Context\ConstantContext",
            "query" => "1",
        ],
        [
            "class" => "MySqlAntl4\Context\DecimalLiteralContext",
            "query" => "1",
        ]
    ];

    public function visitTerminal(TerminalNode $node) : void {}
    public function visitErrorNode(ErrorNode $node) : void {}
    public function exitEveryRule(ParserRuleContext $ctx) : void {}

    public function enterEveryRule(ParserRuleContext $ctx) : void {
        $next = array_shift($this->contexts);
        TestCase::assertSame($next["class"], get_class($ctx), "Ensure the correct context was parsed.");
        TestCase::assertSame($next["query"], $ctx->getText(), "Ensure the correct content was parsed.");
    }
}

class Test extends TestCase
{
    public function testFirstTest()
    {
        $input = "SELECT * FROM `table` WHERE a=1";
        $lexer = new MySqlLexer(InputStream::fromString($input));
        $tokens = new CommonTokenStream($lexer);
        $parser = new MySqlParser($tokens);
        $parser->addErrorListener(new DiagnosticErrorListener());
        $parser->setBuildParseTree(true);
        $tree = $parser->root();

        ParseTreeWalker::default()->walk(new TreeShapeListener(), $tree);
    }
}
