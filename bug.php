```php
function increment_array_values(array &$arr) {
  foreach ($arr as &$value) {
    $value++;
  }
}

$myArray = [1, 2, 3];
increment_array_values($myArray);
print_r($myArray); // Output: Array ( [0] => 2 [1] => 3 [2] => 4 )

$myArray = [1, 2, [3, 4]];
increment_array_values($myArray);
print_r($myArray); // Output: Array ( [0] => 2 [1] => 3 [2] => Array ( [0] => 3 [1] => 4 ) )
```