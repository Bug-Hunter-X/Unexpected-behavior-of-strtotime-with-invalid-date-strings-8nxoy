# PHP strtotime() function unexpected behavior with invalid dates
This repository demonstrates an uncommon error in PHP's `strtotime()` function when handling invalid date strings.  The `strtotime()` function can return false, which causes unexpected results when used in subsequent date calculations. This can lead to errors that are difficult to track down, as the error may not be immediately obvious from the output.

The `bug.php` file shows the problematic code. The `bugSolution.php` demonstrates a solution.