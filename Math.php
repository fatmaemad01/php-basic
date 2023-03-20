<?php
function apply($func){
    echo "<br>Apply to $func Function : <br>";
}
function line (){
    echo "_________________________________________.<br>" ;
}

/*    
      Math Functions:

      01 : abs(Number[Required])
         --- Absolute Value => Non Negative Value 
*/
apply("abs");
echo abs(2)."<br>";
echo abs(-5)."<br>";
echo abs (0)."<br>"; 
line ();


/* 
      02 : mt_rand(min[Optional], max[Optional]) || rand(min[Optional], max[Optional])
         --- mt_getrandmax() => Show Largest Possible Random Value
         --- Generate Random Value Via The Mersenne Twister Random Number Generator Algorithm
*/

apply("mt_rand");
echo mt_rand()."<br>";
echo mt_rand (21 , 26)."<br>";
echo mt_getrandmax ()."<br>";
line ();



/*
      03 : intdiv(dividend[Required], divisor[Required])
           --- return Integer value for any division
           --- intdiv vs /
*/
apply ("intdiv");

echo (18/2)."<br>" ;
echo gettype (18/2)."<br>";

echo intdiv (18,2)."<br>";
echo gettype (intdiv (18,2))."<br>";

echo (17/2)."<br>";
echo gettype (17/2)."<br>";

echo intdiv (17,2)."<br>";
echo gettype (intdiv (17,2))."<br>";

line();




/* 
      04 : fmod(dividend[Required], divisor[Required])
          --- Floating Point Remainder (Modulo) => return the float value not just int  
          --- fmod vs %
*/

apply ("fmod");
echo (12 % 5)."<br>";
echo gettype (12 % 5)."<br>";

echo fmod(12 , 5)."<br>";
echo gettype (fmod(12 , 5))."<br>";      // double 

echo (12.5 % 5)."<br>";
echo gettype (12.5 % 5)."<br>";

echo fmod (12.5 , 5)."<br>";
echo gettype (fmod (12.5 , 5))."<br>";

line();



/*
      05 : ceil(Number[Required])
         --- Round Up To Integer
*/

apply ("ceil");
echo gettype (ceil(2.6))."<br>";
echo ceil (4.99)."<br>";
echo ceil (4.32)."<br>";
echo ceil (4.05)."<br>";
echo ceil (4.145)."<br>";
echo ceil (-4.25)."<br>";      // -4
echo ceil (-2.3)."<br>";       // -2
line ();



/*
      06 : floor(Number[Required])
         --- Round Down To Integer
*/

apply("floor");
echo gettype (floor(2.6))."<br>";
echo floor (4.99)."<br>";
echo floor (4.32)."<br>";
echo floor (4.05)."<br>";
echo floor (4.145)."<br>";
echo floor (-4.25)."<br>";     // -5
echo floor (-2.3)."<br>";      // -3
line();




/*
      07 : round(Number[Required], Precision[Optional], Mode[Optional])
           --- Round Up To Integer
           --- Mode : 
              1- PHP_ROUND_HALF_UP
              2- PHP_ROUND_HALF_DOWN
              3- PHP_ROUND_HALF_EVEN
              4- PHP_ROUND_HALF_ODD

    - ceil, floor, round => Return Double
*/

apply ("round");
echo round(5.99) . "<br>";         // 6
echo round(5.50) . "<br>";         // 6
echo round(5.49) . "<br>";         // 5
echo round(5.10) . "<br>";         // 5

echo round(5.99, 1) . "<br>";      // 6       يعني التعامل مع رقم واحد بعد الفاصلة وبنقرب ما بعده
echo round(5.94, 1) . "<br>";      // 5.9      التعامل ممه 5.9 وبنقرب  ما بعده
echo round(5.995, 2) . "<br>";     // 6           التعامل مع 5.99 ونقرب ما بعدها 
echo round(5.994, 1) . "<br>";     // 6            التعامل مع 5.9 ونقرب ما بعده
echo round(5.994, 2) . "<br>"; // 5.99              التعامل مع 5.99 ونقرب ما بعدها

echo round(5.99, 0, PHP_ROUND_HALF_UP) . "<br>";       // تعتبر النصف للاعلى
echo round(5.49, 0, PHP_ROUND_HALF_UP) . "<br>";       

echo round(5.50, 0, PHP_ROUND_HALF_DOWN) . "<br>";      // تقرب النصف للاسفل

echo round(5.50, 0, PHP_ROUND_HALF_EVEN) . "<br>";      // تقرب لاقرب عدد زوجي سواء لاعلى او اسفل
echo round(4.50, 0, PHP_ROUND_HALF_EVEN) . "<br>";

echo round(5.50, 0, PHP_ROUND_HALF_ODD) . "<br>";      // تقرب لاقرب عدد فردي سواء لاعلى او اسفل
echo round(4.50, 0, PHP_ROUND_HALF_ODD) . "<br>";

line();



/*
       08 : sqrt(Number[Required])
           --- Square Root
*/
apply ("sqrt");
echo sqrt (100)."<br>";
echo sqrt (81)."<br>";
echo sqrt (49)."<br>";
line();





/*
       09 : min(array[Required]) || min(Values[Required])
           --- Find Lowest Value
*/
apply ("min");
echo min(10, 20, -40, -30, 50) . "<br>"; // -40
echo min([10, 20, -40, -30, 50]) . "<br>"; // -40

echo "<pre>";
print_r(min([1, 3, 5], [1, 2, 6]));    // compare the indexs and take the first one which have the min number 
echo "</pre>";
line();





/*
       10 : max(array[Required]) || min(Values[Required])
           --- Find Highest Value
*/
apply ("max");
echo max(10, 20, -40, -30, 50) . "<br>"; // 50
echo max([10, 20, -40, -30, 50]) . "<br>"; // 50

echo "<pre>";
print_r(max([1, 3, 5], [1, 2, 6]));    // compare the indexs and take the first one which have the max number 
echo "</pre>";
line();





