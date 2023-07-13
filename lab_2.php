<?php
$totalTime = microtime(true);

$fileContents = file_get_contents('words_alpha.txt');
$lines        = explode("\n", $fileContents);
$words        = [];

foreach ($lines as $line) {
    $word = trim($line);
    if (strlen($word) == 5 && strlen($word) == count(array_unique(str_split($word)))) {
        $words[implode(array_unique(str_split($word)))] = $word;
    }
}

function search_words($letters, $words, $used) {
    $file_for_write = 'output.txt';

    if (empty($letters)) {
        $used = array_filter($used, function($u) {
            return strlen($u) === 5;
        });
        file_put_contents($file_for_write, implode(' ', $used) . "\n", FILE_APPEND);
        return;
    }

    $counts = array_count_values(str_split(implode($words)));
    asort($counts);
    $rarest   = key($counts);

    foreach ($words as $word) {
        if (strpos($word, $rarest) !== false) {
            $newLetters = array_diff($letters, str_split($word));
            $newWords   = array_filter($words, function ($w) use ($word) {
                return !count(array_intersect(str_split($w), str_split($word)));
            });
            $newUsed    = $used;
            $newUsed[]  = $word;
            search_words($newLetters, $newWords, $newUsed);
        }
    }
}

search_words(range('a', 'z'), array_values($words), []);

$totalTime = microtime(true) - $totalTime;

echo 'Total time: ' . round($totalTime * 1000) . ' ms';