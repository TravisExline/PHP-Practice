<!-- reference passing/function practice -->

<!-- using the & reference sign assigns parameter to be an alias -->
<!-- convertString($test) will echo "I am a changed string" - but $test will remain the same -->
$test = "I am a"
function convertString(&$param)
{
    $param = $param . "changed string";
    echo $param;
}

<!-- SCOPE
similar to scope within other languages - variables not within functions dont exist outside of those functions.
To use a globale vaiable, must use the global keyword -->

$scope_test = "scope"
function learnScope() 
{
    global $scope_test;
    return $scope_test . " is global!";
}