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
    public function visitTerminal(TerminalNode $node) : void {}
    public function visitErrorNode(ErrorNode $node) : void {}
    public function exitEveryRule(ParserRuleContext $ctx) : void {}

    public function enterEveryRule(ParserRuleContext $ctx) : void {
        echo get_class($ctx) . " -> " . $ctx->depth() . " -> " . $ctx->getText() . "\n";
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
