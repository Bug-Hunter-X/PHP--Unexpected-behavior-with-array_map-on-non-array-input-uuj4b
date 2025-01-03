```php
function doubleArray(array $arr): array {
  return array_map(fn($x) => $x * 2, $arr);
}

$numbers = [1, 2, 3, 4, 5];
$doubledNumbers = doubleArray($numbers);
print_r($doubledNumbers);

//The issue occurs when the function is called with a non-array argument
doubleArray(10); 
```