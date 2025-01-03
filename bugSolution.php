```php
function doubleArray(array $arr): array {
  // Add input validation to handle cases where the input isn't an array
  if (!is_array($arr)) {
    return []; // Or throw a custom exception, return an error message, etc.
  }
  return array_map(fn($x) => $x * 2, $arr);
}

$numbers = [1, 2, 3, 4, 5];
$doubledNumbers = doubleArray($numbers);
print_r($doubledNumbers);

//This will now gracefully handle the non-array input
$result = doubleArray(10);
print_r($result); // Output: []
```