<?php
 if (2 > 10) {
    echo ("Yes");
 } else if (10 > 40){
    echo ("Yes 2 ");
 } else {
    echo ("No");
 }
 echo '<br>';

 $page= "Home";
 if ($page == "Home"){
    echo "This is your page";
 }
 
 echo '<br>';

 $title = "Home";
 if ($title == " "){
    echo "Unkown Page";
 }elseif ($title === "Home"){
    echo "Home Page";
 }

 echo '<br>';
  $Lang = "Spanish";
  if($Lang == "Arabic"){
    echo "مرحبا";
  }elseif ($Lang == "English"){
    echo "Hello";
  }elseif ($Lang == "Spanish"){
    echo "Hola";
  }
  echo '<br>';

  if (10 > 5) echo "Good"; else echo "Bad";

  echo '<br>';
  
  if (5 > 10) echo "Yes";
  else echo "No!";

  echo '<br>';

  if (15 == 15) 
     echo "Equal...";
  else 
     echo "Not Equal";   


 if (10 > 5) : ?>
   
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF=8">
    <meta name="Description" content=" This Is Description For My First Page">
    <title>My First Pge</title>
    <style> </style>
    <script>  </script>
    <link rel="stylesheet" href="">
</head>
</head>

<body>
    <h2> This Is My First Page</h2>
    <table border="1"  hight="100%" width="100%">
        <tr>
            <td>aaaaaa</td>
            <td>bbbbbb</td>
            <td>ccccccc</td>
            <td>dddddd</td>
        </tr>
        <tr>
            <td>aaaaaa</td>
            <td>bbbbbb</td>
            <td>ccccccc</td>
            <td>dddddd</td>
        </tr>
        <tr>
            <td>aaaaaa</td>
            <td>bbbbbb</td>
            <td>ccccccc</td>
            <td>dddddd</td>
        </tr>
        <tr>
            <td>aaaaaa</td>
            <td>bbbbbb</td>
            <td>ccccccc</td>
            <td>dddddd</td>
        </tr>
    </table>
</body>

</html>    
<?php endif; ?>

<?php 
echo '<br>';

$avr = 75;
if ($avr >= 90) : 
   echo "Exellent";
elseif ($avr >= 80 && $avr < 90) :
    echo "Very Good";
elseif ($avr >= 70 && $avr < 80) :
   echo "Good";
endif;  
echo '<br>';
echo '<br>';

?>

<?php 
$name = "Fatma";
$country = "Palestine";
$student = true;
$orphan = true;
$price = 150;
$country_discount = 40 ;
$student_discount = 30 ;
$orphan_discount = 15;

if ($country == "Palestine") {
   if ($student == true) {
      if ($orphan == true) {
         echo "Hello $name";
         echo '<br>';
         echo "You will have country & student & orphan discount";
         echo '<br>';
         echo "The Final Price = ". $price - $country_discount - $student_discount - $orphan_discount ;
      }
      else {
         echo "Hello $name";
         echo '<br>';
         echo "You will have country & student discount";
         echo '<br>';
         echo "The Final Price = ". $price - $country_discount - $student_discount;
      }
   }
   else {
      echo "Hello $name";
      echo '<br>';
      echo "You will have country discount";
      echo '<br>';
      echo "The Final Price = ". $price - $country_discount;
   }
}


else {
   echo "Hello $name";
   echo '<br>';
   echo "There is no discount";
   echo '<br>';
   echo "The Final Price = $price";
}

echo '<br>';
echo '<br>';
echo '<br>';

$a = 10; 
if ($a > 5) {
   echo "Good";
}
else {
   echo "Bad";
}
echo '<br>';
echo '<br>';

echo $a > 5 ? "Good" : "Bad";
echo '<br>';
echo "I Love PHP because it's a ". ($a > 5 ? "Good" : "Bad") ." Language";
echo '<br>';
echo '<br>';

$day ="Saturday";
switch ($day){
   case "Saturday" :
      echo "Today is $day and we are closed !";
      break ;
   case "Sunday" :
      echo "Today is $day and we are opend , Welcome" ;
      break;
   case "Monday" :
      echo "Today is $day and we are closed";
      break;    
}
?>


