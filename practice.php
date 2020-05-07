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
<!-- array(); creates a new array -->
$new_array = array("a", "b", "c");

<!-- count(); will count elements in the array and return the length -->
count($new_array);
<!-- returns 3 -->

THIS IS A COMMIT TEST!!! DOES IT WORK???????