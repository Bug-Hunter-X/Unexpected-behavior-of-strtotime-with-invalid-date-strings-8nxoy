```php
$date = date('Y-m-d');
$futureDate = strtotime('+1 day', strtotime($date));
echo date('Y-m-d', $futureDate); //This will work fine

//However, this will cause an error if $date is not a valid date string.
$invalidDate = 'invalid-date';
$futureDateInvalid = strtotime('+1 day', strtotime($invalidDate));
echo date('Y-m-d', $futureDateInvalid); //This will output 1970-01-01 
```