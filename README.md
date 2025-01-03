# PHP Unexpected array_map Behavior
This repository demonstrates an issue with unexpected behavior when using `array_map` in PHP when a non-array is passed as an argument. The function `doubleArray` is designed to double the values in an array.  However, when provided a non-array argument, it throws a fatal error rather than handling the invalid input gracefully. The `bugSolution.php` file shows how to add input validation to prevent the error.

## How to reproduce
1. Clone this repository
2. Run `bug.php`
3. Observe the fatal error when a non-array is passed to `doubleArray`