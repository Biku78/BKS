 <?php
 $str="this is string";
 echo $str;
 $lenn=strlen($str);
 echo "<br>the lenght of the string is : " .$lenn . ". <br>thank you ";
 echo $lenn;
 echo"<br>";
 echo str_word_count($str);
 echo "<br>";
 echo strrev($str);
 echo "<br>";

 echo strpos($str,"is");
 echo "<br>";
echo str_replace("is","at",$str)
 ?>