<?php
function sum($a,$b){
    $s=$a+$b;
    return $s;
}
if (isset($_POST['submit'])){
    $n1=$_POST['n1'];
    $n2=$_POST['n2'];
    echo sum($n1,$n2);
}
?>
<form method="post">
    <label>number 1</label></br>
    <input type="number" name="n1"></br>
    <label>number 2</label></br>
    <input type="number" name="n2"></br>
    <input type="submit" name="submit" value="run">
</form>
