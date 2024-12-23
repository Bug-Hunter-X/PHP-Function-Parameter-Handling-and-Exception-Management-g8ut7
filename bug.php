```php
function my_function($param) {
  if ($param === null) {
    // Handle null case
    return null;
  } else if (is_string($param)) {
    // Handle string case
    return strtoupper($param);
  } else {
    // Handle other cases
    throw new InvalidArgumentException('Invalid parameter type');
  }
}

$result = my_function(null);
var_dump($result); // Output: NULL

$result = my_function('hello');
var_dump($result); // Output: string(5) "HELLO"

$result = my_function(123);
var_dump($result); // Output: Uncaught InvalidArgumentException: Invalid parameter type
```