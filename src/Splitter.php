<?php

$classes = file_get_contents('Stash');
preg_match_all("/(class (\w+).+?\n)(?=class)/s", $classes, $matches);


$class_count = 0;

$includes = [
    "use Antlr\Antlr4\Runtime\ParserRuleContext;",
    "use Antlr\Antlr4\Runtime\Token;",
    "use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;",
    "use Antlr\Antlr4\Runtime\Tree\TerminalNode;",
    "use MySqlAntl4\MySqlParser;",
    "use MySqlAntl4\MySqlParserListener;",
];

$files = [];
while (count($matches[2]) > $class_count) {
    $filename = "Context/" . $matches[2][$class_count] . ".php";
    $content = "<?php\n\ndeclare(strict_types=1);\nnamespace MySqlAntl4\Context;\n\n" . implode("\n", $includes) . "\n\n" . $matches[1][$class_count];
    $files[] = $matches[2][$class_count];
    file_put_contents($filename, $content);
    $class_count++;
}

sort($files);
foreach ($files as $file) {
    print $file . "\n";
}