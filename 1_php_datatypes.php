<?php
/**
 * Detects the environment and outputs the appropriate line break.
 */
function line_break() {
    if (php_sapi_name() === 'cli') {
        echo PHP_EOL; // Standard newline for Terminals
    } else {
        echo "<br>" . PHP_EOL; // HTML break + newline for "View Source" clarity
    }
}

// 1. String
$x = "Hello World";
echo $x;
line_break();

// 2. Integer (removed redundant quotes for efficiency)
$num = 12345;
echo $num; 
line_break();

// 3. Float
$float = 123.45;
echo $float;
line_break();

// 4. Boolean (true outputs "1", false outputs "")
$bool = true;
echo $bool;
line_break();

// 5. Array
$arr = array("Shoujanya", "Shakya");
// Use <pre> tags in browsers to make print_r/var_dump readable
if (php_sapi_name() !== 'cli') echo "<pre>";
print_r($arr);
line_break();
var_dump($arr);
if (php_sapi_name() !== 'cli') echo "</pre>";
line_break();

// 6. NULL
$y = "Hello world!";
$y = NULL;
var_dump($y);
line_break();

// 7. Object
class Student {
    private $name;
    public function setName($name) {
        $this->name = $name;
    }
}

$ram = new Student();
$ram->setName("Ram");

if (php_sapi_name() !== 'cli') echo "<pre>";
var_dump($ram);
if (php_sapi_name() !== 'cli') echo "</pre>";
?>
