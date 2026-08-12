<?php

$name ="John Doe";
echo 'Hello, $name!\n';
echo "Hello, $name!\n";

$heredoc = <<<EOD
Multi line String
with variable interpolation: $name
EOD;

$nowdoc = <<<'EOD'
Multi line String
EOD;

echo $heredoc . "\n";
echo $nowdoc . "\n";