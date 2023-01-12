<?php
// PHP implementation of above approach
 
// Function to check if n is palindrome
function isPalindrome($n)
{
    // Find the appropriate divisor
    // to extract the leading digit
    $divisor = 1;
    while ((int)($n / $divisor) >= 10)
        $divisor *= 10;
 
    while ($n != 0)
    {
        $leading = (int)($n / $divisor);
        $trailing = $n % 10;
 
        // If first and last digits are
        // not same then return false
        if ($leading != $trailing)
            return false;
 
        // Removing the leading and trailing
        // digits from the number
        $n = (int)(($n % $divisor) / 10);
 
        // Reducing divisor by a factor
        // of 2 as 2 digits are dropped
        $divisor = (int)($divisor / 100);
    }
    return true;
}
 
// Function to find the largest
// palindromic number
function largestPalindrome($A, $n)
{
 
    // Sort the array
    sort($A);
 
    for ($i = $n - 1; $i >= 0; --$i)
    {
 
        // If number is palindrome
        if (isPalindrome($A[$i]))
            return $A[$i];
    }
 
    // If no palindromic number found
    return -1;
}
 
// Driver Code
$A = array(1000, 22000, 200);
$n = sizeof($A);
 
// print required answer
echo largestPalindrome($A, $n);
 
?>
