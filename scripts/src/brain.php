<!DOCTYPE html>
<html>
<head>
<title>Brain</title>
</head>
<body>
<?php
    $number = $_POST["number"];
    $solution = 7;

    $data = file("brain.txt");
    foreach ($data as $key => $val):
      print "$val <br />";
      $data[$key] = $data[$key]+1;
    endforeach;

    function verify($number, $solution){
      if($number == $solution) return "That's the number I was thinking of!";
      if($number < $solution) return "Higher...";
      if($number > $solution) return "Lower...";
      else return "Nope.";
    }
    //some comments here
   echo "<p><h2>".verify($number, $solution)."</h2></p>";

    $fp = fopen("brain.txt", "w");
    foreach ($data as $val):
      fwrite($fp, $val."\n");
    endforeach;
    fclose($fp);

?>
</body>
</html>
