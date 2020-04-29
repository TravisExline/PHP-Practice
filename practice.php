<!-- reference passing/function practice -->

<!-- using the & reference sign assigns parameter to be an alias -->
<!-- convertString($test) will echo "I am a changed string" - but $test will remain the same -->
$test = "I am a"
function convertString(&$param)
{
    $param = $param . "changed string";
    echo $param;
}