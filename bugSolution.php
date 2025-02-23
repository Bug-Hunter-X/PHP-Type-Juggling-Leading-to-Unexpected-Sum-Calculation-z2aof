```php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) {
      $sum += (float)$number; // Explicit type conversion for safety 
    } else {
      //Handle Non-numeric values appropriately. 
      // example: throw new InvalidArgumentException('Array must contain only numbers');
      // or simply skip non numeric value  
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, '4a'];
$sum = calculateSum($numbers);
echo "Sum: " . $sum; // Correct sum, ignoring '4a'
```