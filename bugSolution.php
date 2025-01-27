```php
$date = date('Y-m-d');
$futureDate = strtotime('+1 day', strtotime($date));
if ($futureDate === false) {
    echo 'Invalid date provided';
} else {
    echo date('Y-m-d', $futureDate);
}

//Improved handling of potential errors
function getFutureDate($dateString) {
  $timestamp = strtotime($dateString);
  if ($timestamp === false) {
    return false; // Or throw an exception
  }
  return date('Y-m-d', strtotime('+1 day', $timestamp));
}

$date = '2024-03-10';
echo getFutureDate($date) . '\n';

$invalidDate = 'invalid-date';
echo getFutureDate($invalidDate); //Outputs false
```