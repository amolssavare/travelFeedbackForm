<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php tutorial</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing:border-box;
    }
    .container{
        max-width:80%;
        background-color:grey;
        margin: auto;
        padding: 23px;
    }
</style>
<body>
    <div class="container">
       <h1>Lets Learn about PHP</h1> 
     <?php
// $age=4;
// if($age>18){
//     echo "you are eligible for voting";
// }
// else{
//     echo "you are not  eligible for voting";

// }
// $var1=0;
// while ($var1 <= 10) {
//    if ($var1==4) {
//     $var1++;
//     echo "he break hoil","<br>";
//     // continue;
//     break;
//  }
//   { 
//     echo"the current value is".$var1,"<br>";
//    $var1++;
// }
// }

//Iterate array in PHP using While Loop
$language=array("php","html","javascript");
// echo $language[1];
// $a=0;
// while ($a < count($language)) {
//     echo"<br>";
//     echo $language[$a];
//     $a++;
// }

//For Each loop
// foreach($language as $value){
//    echo "the value is ".$value,"<br>"; 
// }

//Functions
// function sum($var1,$var2)
// {
//     $sum=($var1+$var2);
//     return $sum;
// }
// echo "the sum is ".sum(3,4),"<br>";
// echo "the sum is ".sum(6,4),"<br>";
// echo "the sum is ".sum(8,4),"<br>";
//


//string
// $str="meri jaan mehfil hi thukraye";
// // $lenn=strlen($str);
// // echo str_word_count($str);
// // echo strrev($str);
// // echo strpos($str,'jaan');
// echo str_replace("jaan","maan",$str);


      ?>
    </div>
</body>
</html>