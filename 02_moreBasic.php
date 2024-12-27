<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
       margin: 0%;
       padding: 0%;
       box-sizing: border-box;

    }

.container {
    width: 80%;
    margin: auto;
    background-color: antiquewhite;
    padding: 23px;
}
</style>
<body>
    <div class="container"><h1>let's learn</h1>
        more php basic
    <?php
        echo "<br>";
        $age=23;
        if($age>18){
            echo "eligible";
        }
        else{
          echo "not eligible";
        }
//array
        echo $language=array("python","java","oops");
        echo $language[1];
        //loop in php
        $a=0;
        while($a<=10){
            echo "<br> the value of a is : ";
            echo $a;
            $a++;
        }
        foreach ($language as $key) {
            # code...
            echo "<br>the value is : ";
            echo $key;


        }
         
    ?>
    </div>
</body>
</html>