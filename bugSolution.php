```php
function my_function($param) {
  if ($param === null) {
    return null; //Explicitly handle NULL
  } elseif (is_string($param)) {
    return strtoupper($param);
  } elseif (is_numeric($param)) {
    return (int)$param * 2; //Handle numeric inputs
  } elseif (is_array($param)){
    return array_sum($param); //Handle arrays
  } elseif (is_bool($param)){
    return $param ? 'true' : 'false'; //Handle booleans
  } else {
    $type = gettype($param);
    throw new InvalidArgumentException("Invalid parameter type: Expected string, number, boolean, array or null, received $type");
  }
}

$result = my_function(null);
var_dump($result); // Output: NULL

$result = my_function('hello');
var_dump($result); // Output: string(5) "HELLO"

$result = my_function(123);
var_dump($result); // Output: int(246)

$result = my_function([1,2,3]);
var_dump($result); //Output: int(6)

$result = my_function(true);
var_dump($result); // Output: string(4) "true"

$result = my_function(new stdClass());
var_dump($result); // Output: Uncaught InvalidArgumentException: Invalid parameter type: Expected string, number, boolean, array or null, received object
```