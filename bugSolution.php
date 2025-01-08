```php
function increment_array_values_safe(array $arr) {
  $newArray = [];
  foreach ($arr as $key => $value) {
    if (is_array($value)) {
        $newArray[$key] = increment_array_values_safe($value); 
    } else {
      $newArray[$key] = $value + 1;
    }
  }
  return $newArray;
}

$myArray = [1, 2, [3, 4]];
$incrementedArray = increment_array_values_safe($myArray);
print_r($myArray); // Output: Array ( [0] => 1 [1] => 2 [2] => Array ( [0] => 3 [1] => 4 ) )
print_r($incrementedArray); // Output: Array ( [0] => 2 [1] => 3 [2] => Array ( [0] => 4 [1] => 5 ) )
```