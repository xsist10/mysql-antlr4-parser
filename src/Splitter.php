<?php

$classes = file_get_contents('Stash');
preg_match_all("/(class (\w+).+?\n)class/s", $classes, $matches);


$class_count = 0;

while (count($matches[2]) > $class_count) {
    $filename = "Context/" . $matches[2][$class_count]. ".php";
    $content = "<?php\n\ndeclare(strict_types=1);\nnamespace MySqlAntl4\Context;\n\nuse Antlr\Antlr4\Runtime\ParserRuleContext;\n\n" . $matches[1][$class_count];
    print("Filename: $filename\n");
    file_put_contents($filename, $content);
    $class_count++;
}
