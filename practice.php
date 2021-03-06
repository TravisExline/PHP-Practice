<!-- reference passing/function practice -->

<!-- using the & reference sign assigns parameter to be an alias -->
<!-- convertString($test) will echo "I am a changed string" - but $test will remain the same -->
$test = "I am a";
function convertString(&$param)
{
    $param = $param . "changed string";
    echo $param;
}

<!-- SCOPE
similar to scope within other languages - variables not within functions dont exist outside of those functions.
To use a globale vaiable, must use the global keyword -->

$scope_test = "scope";
function learnScope() 
{
    global $scope_test;
    return $scope_test . " is global!";
}

<!-- this will not work -->

function badScope()
{
    $scope_test;
    return $scope_test . " is broken";
}

<!-- VARIABLE PRACTICE WITH BUILT IN FUNCTIONS -->
<!-- gettype() take a variable as an argument and returns a string value -->

$name = Travis;
echo gettype($name);
<!-- prints: string -->

<!-- var_dump() takes a variable as an arg and prints DETAILS about that arg -->

var_dump($name);
<!-- prints: string(6) "Travis" -->

<!-- strrev() takes in a string as an arg and returns a string in reverse order -->

echo strrev("String");
<!-- prints: "gnirtS" -->

<!-- strtolower() takes an argument of a string and turns to all lowercase -->

echo strtolower("STRING");
<!-- prints: string -->

<!-- str_repeat() takes a string as the first arg. and a number as the second - repeats accordingly -->
echo str_repeast("string", 2);
<!-- prints: stringstring -->


<!-- SUBSTRINGS -->
<!-- substr_count() returns the number of instanves of each substring within a string.
    takes in two args; the string to search(haystack) and the string to search for(needle) -->
<!-- NOTE: looking for "real" will count words such as "really" -->

$long_string = "I am a long string and I am great!";

echo substr_count($long_string, "I am");
<!-- prints: 2 -->

<!-- ARRAYS -->
<!-- access array elements similar to other languages (number codex) -->
<!-- array(); creates a new array -->
<!-- can also be created shorthand with brackets [] -->
$new_array = array("a", "b", "c");

<!-- count(); will count elements in the array and return the length -->
count($new_array);
<!-- returns 3 -->

<!-- echo will NOT print array contents -->
<!-- use print_r() -->
echo $new_array;
<!-- prints: Array -->
print_r($new_array);

echo implode(", ", $new_array);
<!-- separates each element in the array the array with the included string(1st arg) -->

<!-- ADDING AND CHANING ELEMENTS IN AN ARRAY -->
<!-- Add elements to the end of an array by taking the variable name and appending [], assignment op (=), and element to add -->

$new_array[] = "I'm a new element!";

<!-- we can also change elements explicitly -->
$new_array[0] = "Changed the element!"

<!-- PUSH AND POP
array_pop() takes an array as an arg, removes the last element, and returns it.
array_push() takes an array as first arg and pushes following args to the end of array. (returns number of elements in array) -->

$new_array = array("a", "b", "c");
array_pop($new_array);
<!-- returns "c" and $new_array becomes [a, b] -->

array_push($new_array, "z");
<!-- $new_array becomes [a, b, z] -->

<!-- SHIFT AND UNSHIFT
array_shift() removes the first element of an array and returns it.
array_unshift() takes an array as first arg, and following args added to beginning of array. (returns new number of elements in array) -->

$new_array = array("a", "b", "c");
array_shift($new_array);
<!-- returns "a" and $new_array becomes [b, c] -->

array_unshift($new_array, "z");
<!-- returns 3 and $new_array becomes [z, b, c] -->

<!-- ASSIGNMENT ARRAYS -->
<!-- Similar to hashes -->

$new_array = ["key" => "value", "key2" => "value2"];

$new_array["key2"];
<!-- prints "value2" -->
$new_array["key3"] = "value3";
<!-- adds a new key/value pair -->

$new_array["key3"] = "I am value3";
<!-- changes the values for key3 -->

<!-- unset() will destroy a key/value pair -->
$new_array = ["key" => "value", "key2" => "value2"];
unset($new_array["key2"]);
<!-- removes key2 => value2 -->

<!-- REMEMBER REFERENCE vs VALUE
When passing by reference(preceded by &), points to the same space in memory; SAME THING! -->
function exampleRef($array)
{
    $array["key"] = "value";
}
<!-- will not alter the array passed in_array -->

function exampleRef(&$array)
{
    $array["key"] = "value";
}

<!-- WILL alter  -->


<!-- FORMS! -->
<!-- Superglobals -->
<!-- There are automatic global variables ghat are available in all scopes throughout a script
$_GET - this contains an associative array of variables passed to the current script using query parameters in the URL
$_POST - this contains an associative array of variables passed to the current script using a form submitted using the “POST” method -->

<!-- Form Handling with GET -->
<!-- Data would be available via $_GET once the form below is submitted -->
<!-- the default nethod is GET, so no need to specify... <form> is the same -->
<form method="get"> <form> is the same
First name: <input type="text" name="first">
<br>
Last name: <input type="text" name="last">
<br>
<input type="submit" value="Submit Name">
</form>