<?php
function fibonacci(int $n): int {
    if ($n <= 1) {
        return $n;
    }
    return fibonacci($n - 1) + fibonacci($n - 2);
}

function pangkat(int $x, int $y): int {
    if ($y == 0) {
        return 1;
    }
    return $x * pangkat($x, $y - 1);
}

echo fibonacci(7);   // Output: 13
echo pangkat(2, 5);  // Output: 32