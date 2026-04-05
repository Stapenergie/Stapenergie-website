<?php
echo '<pre>';
echo 'DOCUMENT_ROOT: ' . $_SERVER['DOCUMENT_ROOT'] . "\n";
echo '__FILE__: ' . __FILE__ . "\n";
echo '__DIR__: ' . __DIR__ . "\n";
echo 'dirname x1: ' . dirname(__FILE__) . "\n";
echo 'dirname x2: ' . dirname(dirname(__FILE__)) . "\n";
echo 'dirname x3: ' . dirname(dirname(dirname(__FILE__))) . "\n";
echo "\nhead.php bestaat via dirname x2: " . (file_exists(dirname(dirname(__FILE__)) . '/includes/head.php') ? 'JA' : 'NEE') . "\n";
echo 'head.php bestaat via DOCUMENT_ROOT: ' . (file_exists($_SERVER['DOCUMENT_ROOT'] . '/includes/head.php') ? 'JA' : 'NEE') . "\n";
echo '</pre>';
