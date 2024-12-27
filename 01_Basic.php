<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php website</title>
</head>
<body>
    <?php
    // variable
         $var1=23;
         $var2=32;
        // echo $var1;
        // echo $var2;

    // data typs
        //arithmetics operator
    echo "the value is : ";
    echo $var1 + $var2;
    echo "<br>";
    echo "the value2 is : ";
    echo $var1 - $var2;
    echo "<br>";

    echo "the value is : ";
    echo $var1 * $var2;
    echo "<br>";

        // assignment operator
    echo "the value is : ";
    echo $var1 += $var2;
    echo "<br>";
        // increment operator
    echo "the value is : ";
    echo $var1++;
    echo "<br>";
        // comparesion operator
    echo "<h1>here</h1>";
    echo "the comparesion ";
    echo"<br>";
    echo var_dump(1==4);
    echo"<br>";
    echo var_dump(1!=4);
    echo"<br>";

    echo var_dump(1<=4);
    echo"<br>";




        // logical operator
        // and (&&)
        // or(||)
        // xor
        // !

$myvar=(true and true);
$myvar=(false and true);

echo var_dump($myvar);
    ?>
    <div class="container">
        hello,this is Bikram.
        

         

        <?php 
         echo "you want to meet me";
        ?>
    </div>
</body>
</html>