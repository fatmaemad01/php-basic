<?php

/* 
   Form of any function : 
   function function_name (parameters){
    code
   }
*/
function say_hello ($name){
    echo "Hello Mr.$name <br>";
}                                    // this is one parameter function

say_hello("Ahmed");                  // calling function , we write function_name (argument)
say_hello("Sami");
echo '<br>';
echo '<br>';
echo '<br>';






// 2 parameters function
function say_hello_to($one, $two) {
    echo "Hello $one $two<br>";
  }
say_hello_to("Osama", "Ahmed");
say_hello_to("Fatma","");
echo '<br>';
echo '<br>';
echo '<br>';






/* 
   Echo VS Return Function 
   echo => print same thing for the value and cant use the value in another possition..
   function => give you the value then use it anywhere you need
*/
$prizes = ["PC", "Playstation", "XBOX", "Apple TV", "Laptop", "iPad", "iPhone"];

function get_number($num_one , $num_two) {
  return $num_one + $num_two;
  echo "Will Not Echo Anything";
}

// get_number(2, 1); // 3
// echo $prizes[3]; // "Apple TV"
// $prize_number = get_number(2, 1);
// var_dump($prize_number);
// echo $prizes[];

// $prize_number = get_number(2, 1);
// var_dump($prize_number);

echo $prizes[get_number(3, 1)];
echo '<br>';
echo '<br>';
echo '<br>';








/* Function with default parameter value */
function get_data ($name = "Private" , $country = "Private", $age = "Private", $address= "Private"){
    echo "The name is $name <br>";
    echo "The country is $country <br>";
    echo "The age is $age <br>";
    echo "The address is $address <br>";
}

get_data (name : "Fatma" , country : "Palestine", address : "Al-Bureij camp");
echo '<br>';
echo '<br>';
echo '<br>';






/*
 Function Variable Arguments List 
 func_num_args() => show the number of arguments 
 func_get_arg(index) => show the value for the index we need
 func_get_args() => show all arguments inside array
 */

 function calculate (...$nums){
    echo "The number of argument = ".func_num_args()."<br>";
    /*
    echo "The argument in the index 3 = ".func_get_arg(3)."<br>";
    print_r(func_get_args());
    echo '<br>';
    */
    echo "The argument in the index 3 = ".$nums[3]."<br>";
    print_r($nums);
    echo '<br>';
    $result = 0;
    foreach ($nums as $num) :
        $result += $num;
    endforeach;
    echo "The summation of arguments = ".$result;  
}
calculate(3 , 7 , 10 , 15 , 4);
echo '<br>';
echo '<br>';
echo '<br>';







/* Splat operator */
$group_of_Skills = ["HTML", "CSS" , "JS"]; 
function Get_Info ($name , $country = "Private" , ...$Skills){
  echo "Hello $name , your country is $country  <br>";
  foreach ($Skills as $skill): 
       echo "__ ".$skill."<br>";
  endforeach;
}
//Get_Info("Fatma" , "Palestine" , ...$group_of_Skills);
Get_Info("Fatma" , "Palestine" , ...["HTML", "CSS" , "JS"]);
echo '<br>';
echo '<br>';
echo '<br>';






/* Function Variable */
function one (){
  return 'one from function';
}
echo one();
echo '<br>';

$func1 = 'one';
echo $func1();                    // while $func1 = "one" then => $func1() = one() 
echo '<br>';

function say_Hi ($someone){
  return "Hi $someone";
}
$func2 = "say_Hi";
echo $func2 ("Fatma");
echo '<br>';
echo '<br>';





/* Function Exist => show us if the function is defined or not */
if (function_exists ("one")){
  echo "Function one is exists";
}else {
  echo "Not Found";
}
echo '<br>';
echo '<br>';





/* Function strlen => show us the number of character we passed to it */
echo strlen ("Fatma");
echo '<br>';
$func3 = "strlen";
echo $func3("Keep going");
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';





/* Passing Arguments By Reference */
function add_five(&$number){        // reference
  return $number += 5 ;
}

$n = 20 ;
echo add_five($n);
echo "<br>";
echo $n ;
echo '<br>';
echo '<br>';
echo '<br>';



/*  Return Type Declaration */
function addition($num1 , $num2) : int {            // here we select returend data type
  return $num1 + $num2;
}
echo addition (15.3 , 12.6);
echo '<br>';
echo '<br>';
echo '<br>';




/* Anonymous Function => Function without name , defined once only 

function Say_Hola ($someone){         // this is normal function
  return "Hola ".$someone;
}
echo Say_Hola("Salam");
echo '<br>';
echo '<br>';
echo '<br>';


$say_welcome = function(){          // this is anonymous function without parameters , defined as variable 
  return "Welcome ";
};
echo $say_welcome();
echo '<br>';

$talk_Hi = function ($someone){               // anonymous function with parameter
  return "Hi ".$someone;
};
echo $talk_Hi ("Noura"); 
echo '<br>';
echo '<br>';

 // If we need to use any variable we  undefined inside function write => use($variable)
$msg = "Hi";
$said_Hi = function ($one)  use($msg){
  return $msg.' '.$one;
};
echo $said_Hi("Rama");  */
echo '<br>';
echo '<br>';





/* Array Map */
$Nums = [5,10,15,20,25,30];
function add_fiv ($Num){
    return $Num + 5 ;
}
$Nums_after_adding = array_map ("add_fiv", $Nums);
echo '<pre>';
print_r ($Nums_after_adding);
echo '</pre>';
echo '<br>';
echo '<br>';






/* Arrow Function => abbreviation the function */
$say_welcome = fn() => "Welcome ";
$talk_Hi = fn($someone) => "Hi ".$someone;
$msg = "Hi";
$said_Hi = fn($one) => $msg.' '.$one;
echo $say_welcome();
echo '<br>';
echo $talk_Hi ("Gamal");
echo '<br>';
echo $said_Hi ("Hanan");
echo '<br>';
echo '<br>';
echo '<br>';









