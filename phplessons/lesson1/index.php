<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= "New page!"; ?></title>
</head>
<body>
    
    <?php
    echo "Hello world!!!"
    ?>
    <hr>
    <?php 
    echo "It's date today!";
    echo date(DATE_RSS);
    ?>
    <hr>
    <?php
    echo 9
    +
    7
    -7;
    echo " text";
    ?>
    <hr>
    <?php
    if(mt_rand(0,1)){
        ?>
        <div style="color: blue">Blue tex</div>
    <?php
    } else {
        ?>
        <div style="color: red">Red tex</div>
<?php
    }
    ?>
    <hr>

    <?php
    echo "Main text <br>";
    include "second.php";
    echo "Main text";
    ?>
    <hr>
    <?php
    $var = 1234;
    echo $var;
    ?>
    <hr>
    <?php
    $user ="Jon";
    if(isset($user))
    echo "The variable exists";
    else
    echo "It isn't anything.";
    ?>
    <hr>
    <?php
    $str = "";
    if (empty($str))
    echo "String is empty";
    else
    echo "String is full";
    ?>
    <hr>
    <?php
    echo gettype(1.3);
    if (is_int(1.25))
    echo "this is a number";
    else
    echo "this isn't a number";
    ?>    
    <hr>
    <?php
    $str = "123 any text";
    // echo "123 <br>";
    $nuv = $str - 33;
    echo "$nuv <br>";
    echo "$str <br>";
    echo true;
    ?>
    <hr>
    <?php
    $float = 4.3;
    $number = (int)$float;
    echo $number;
    ?>
    <hr>
    <?php
    $num = 21;
    $f = (float)($num/2)-(int)($num/2);
    if ($f) {
        echo "true";
    } else {
        echo "false";
    }
    
    echo  "<br>" . md5("asdfg");
    ?>
    <hr>
    <?php
    echo "для перевірки на декілька значень<br>";
    $a = 4;
    switch ($a) {
        case 5: 
            echo "Var: 5";
            break;
        case 6: 
            echo "Var: 6";
            break;
        case 4: 
            echo "Var: 4";
            break;
        default:
            echo "Default work!";
            break;
    }
    ?>
    <hr>
    <?php
    $nums = array(1, 3, -13);
    $nums[1] = 45;
    echo $nums[1].'<br>';

    $arr = [4, true, 6, "8", "some text"];
    $arr[2] = false;
    echo $arr[2].'<br>';

    $list = ["age" => 50, "name" => "John"];
    $list[0] = 45;
    echo $list[0].'<br>';

    $matrix = [
    [4, 5, 7],
    [2,3,4,55],
    [0,8,9]
    ];
    $matrix[0][0] = "this is new text";
    echo $matrix[0][0];
    ?>
    <hr>
    <?php
    echo "LOOP".'<br>';
    for($i = 100; $i >20; $i -= 5) {
        echo $i.'<br>';
    }

    $ii = 1;
    while($ii <= 10) {
        echo $ii.'<br>';
           $ii++;
    }

    $iii = 100;
    do {
        echo $iii;
    } while ($iii < 10);
    ?>
    <hr>
    <?php
    for ($el = 100; $el >10; $el /= 2) {
        if ($el < 15) 
        break;

        if ($el % 2 == 0)
        continue;

        echo $el.'<br>';
    }
    ?>
    <hr>
    <?php
    $list = [5, 4, 3, 'list', 'd'];
    for ($i = 0; $i < count($list); $i++)
    echo "Element $i: $list[$i]<br>";
    ?>
    <hr>
    <?php
    $list = ["age" => 30, "name" => "Alex", "hobby" => "football"];
    $arr = [1, 3, 5, 6];
    foreach ($list as $item => $value) {
        echo "Key: $item. Value: $value.<br>";
    }
    foreach ($arr as $item => $value) {
        echo "Key: $item. Value: $value.<br>";
    }
    foreach ($list as $value) {
        echo "Value: $value.<br>";
    }
    ?>
    <hr>
    <?php
    function summary ($arr) {
        $summa =0;
        foreach($arr as $value) {
            $summa += $value;
        }
        return $summa;
    }
    $list = [1,3,4,5,6,2];
    echo summary($list).'<br>';
    echo summary([5,2,3]).'<br>';
    ?>
    <hr>
    <?php
    function info() {
        global $x;
        $x = 0;
    }
    $x = 10;
    info();
    echo $x;
    
    function click() {
        static $cli;
        $cli ++;
        echo $cli.'<br>';
    }

    click();
    click();
    click();
    ?>
    <hr>
    



</body>
</html>