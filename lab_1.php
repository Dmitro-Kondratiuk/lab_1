<?php
$string  = file_get_contents('words_alpha.txt','r');
$array  = explode("\r\n",$string);
if(empty($argv[1])){
    echo "Please enter ARGUMENT\n";
    return;
}
$search_verb = str_split($argv[1]);
$search_count = 0;
foreach ($array as $item) {
    if (((strlen($item)) === count($search_verb) )) {
        $new_string = str_replace($search_verb, '', $item);
        if (empty($new_string)) {
            $search_count++;
            echo $item."\n";
        }
    }
}
if (0==$search_count){
    echo "Nothing found for your request\n";
}