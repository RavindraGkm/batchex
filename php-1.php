<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
    echo date('d-m-Y');
?>

<select>
    <?php
    for($i=1950;$i<=2050;$i++) {
        echo "<option>$i</option>";
    }
    ?>
</select>
<?php
$ar = array('Alkalk','askjaskj');
$ar[]='Apple';
$ar[]='Orange';
echo count($ar);
foreach($ar as $fruit) {
    echo $fruit."<br/>";
}
?>
<br/>
<br/>
<br/>
<?php
$ar = array('Name'=>'Nattu','Age'=>21);
foreach($ar as $key=>$val) {
    echo $key ."=>".$val."<br/>";
}
?>
<br/>
<br/>
<br/>
<?php
$ar = array(array(1,2),array(3,4));
$f_array = $ar[0];
echo $f_array[0];
?><br/>
<br/>
<br/>
<?php
$ar = array(1,2,3,4);
echo implode(",",$ar);
?>
</body>
</html>