<!DOCTYPE html>
<html >
<body>
    <?php 
    ECHO "Hello World!<br>";
    echo "Hello World!<br>";
    ECHO "Hello World!<br>";
    ?>
    <br>

     <?php 
     $lang="PHP";
    echo "Hello World!".$lang."<br>";
    echo "Hello World!".$lang."<br>";
    echo "Hello World!".$lang."<br>";
    ?>
    <br>

    <?php
    $x=45;
    $name="Mr Bean";
    echo "Roll no: ",$x;
    echo "<br>";
    echo "Name: ",$name;
    echo "<br>";
    ?>


<?php
    $data1="PHP";
    echo "I am learning".$data1."!";
    echo "<br>";

    echo "I am learning $data1!.";
    echo "<br>";
    echo "<br>";


    $value_1=14;
    $value_2=15;
    echo "Total = ",$value_1+$value_2;
    echo "<br>";

    $num=11;
    var_dump($num);
    echo "<br>";

    $num=16.46;
    var_dump($num);
    echo "<br>";
    echo "<br>";

    $num="Shubh";
    var_dump($num);
    echo "<br>";

    $num="420 ";
    var_dump($num);
    echo "<br>";
    echo "<br>";

    $num=true;
    var_dump($num);
    echo "<br>";
    

    $num=false;
    var_dump($num);
    echo "<br>";
    echo "<br>";

    $lang=array("PHP","Java","HTML","PHP","C","C++");
    var_dump($lang);
    // echo "<br>";
    echo "<br>";

    print_r($lang);
    echo "<br>";
    echo "<br>";

    $ques="How was your day";
    $ques=null;
    var_dump($ques);
    echo "<br>";

    define("WISHES","Good Evening");
    echo WISHES;
    echo "<br>";

    const WISH="Good day";
    echo WISH;

    ?>

</body>
</html>