<?php
function sc(string $words): int {
    $wordsSeen = [];
    $totalTime = 0;
    foreach (explode(' ', $words) as $word) {
        if (ctype_alpha($word)) {
            if (in_array(strtolower($word), $wordsSeen)) {
                $totalTime++;
            } else {
                $totalTime += strlen($word);
                $wordsSeen[] = strtolower($word);
            }
        } else {
            $totalTime++;
        }
    }
    return $totalTime;
}

echo sc("Hello World!");  // prints 10
echo sc("black cat and white cat all are cat");  // prints 24
echo sc("black Cat and white cat all are cat");  // prints 24
$words1 = "Related Articles: Ruby Environment, CoffeeScript Environment, JavaScript Environment, Python Environment, Haskell Environment, Java Environment, Clojure Environment, .NET Environment.";
echo sc($words1);  // prints 86
$words2 = "Related Articles: Ruby Environment, Coffee Script Environment, Java Script Environment, Python Environment, Haskell Environment, Java Environment, Clojure Environment, .NET Environment.";
echo sc($words2);  // prints 78
?>