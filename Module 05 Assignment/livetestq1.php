<?php
function checkevenstring(array $strings) {
    $result = [];
    foreach ($strings as $string) {
        if (strlen($string) % 2 === 0) {
            $result[] = $string;
        }
    }
    return $result;
}

$input = ["apple", "banana", "kiwi", "mango", "tea"];
$output = checkevenstring($input);
print_r($output);  
?>