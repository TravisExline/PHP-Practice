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

<!-- var_dump() takes a variable as an arg and prints DETAILS about that arg -->

var_dump($name);
<!-- prints string(6) "Travis" -->