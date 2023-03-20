<?php

function apply($func){
    echo "<br>Apply to $func  : <br> <br>";
}
function line (){
    echo "_________________________________________.<br>" ;
}


/*
        01 : filter_list()
           --- Returns A List Of All Supported Filters
*/
apply ("filter_list");
echo "<pre>";
print_r(filter_list());
echo "</pre>";
line();




/*
        02 : filter_id(Filter_Name[Required])
*/

apply ("filter_id");
echo "Filter ID = ".filter_id("number_float")."<br>";
line();



/*
       03 : filter_var(Value[Required], Filter[Optional], Options[Optional])
           --- Filters A Variable With A Specified Filter
           --- Validate Filters

*/
apply("filter_var");

$val = "on"; // True || 1 || "yes" || "on"

if (filter_var($val, FILTER_VALIDATE_BOOL)) { // Or ID "258"
      echo "This Is True";
} else {
  echo "This Is False";
}

echo "<br>";
line();




/*
       04 :  FILTER_VALIDATE_BOOL => [True, 1, Yes, On]
             - to check the true || false || null values 
             - if we write "True" | "Yes" | 1 | "On" => the result will be true
             - if we write "False" | "No" | 0 | "Off" => the result will be false
             Flag => FILTER_NULL_ON_FAILURE => to return null if the value != true | false
*/
apply ("FILTER_VALIDATE_BOOL");
$bool = true ;      
$bool1 = false;      
$bool2 = "fatma";

var_dump(filter_var ($bool , FILTER_VALIDATE_BOOL));
echo "<br>";
var_dump(filter_var ($bool1 , FILTER_VALIDATE_BOOL));
echo "<br>";
var_dump(filter_var ($bool2 , FILTER_VALIDATE_BOOL));      //the right result must be null but here the result will be false because we dont use the flag which return null
echo "<br>";
var_dump(filter_var ($bool2 , FILTER_VALIDATE_BOOL , FILTER_NULL_ON_FAILURE)); // here we use the flag
echo "<br>";
line();




/*
       05 :  FILTER_VALIDATE_URL
             - to check if the url is found or null .
               Flags for this filter :
                 1 : FILTER_NULL_ON_FAILURE => return null if there are no URL
                 2 : FILTER_FLAG_PATH_REQUIRED => check if the URL has path (true) || no path (false) 
                 3 : FILTER_FLAG_QUERY_REQUIRED => check if URL has query (true) || no query (false)
*/

apply("FILTER_VALIDATE_URL");
$url = "httpelsfjkd//";
$url1 = "https://elzero.org";
$url2 = "https://elzero.org/";
$url3 = "https://elzero.org/?id=100";

var_dump (filter_var ($url , FILTER_VALIDATE_URL));
echo "<br>";

var_dump (filter_var ($url , FILTER_VALIDATE_URL ,FILTER_NULL_ON_FAILURE ));
echo "<br>";

var_dump (filter_var ($url1 , FILTER_VALIDATE_URL ,FILTER_FLAG_PATH_REQUIRED ));
echo "<br>";

var_dump (filter_var ($url2 , FILTER_VALIDATE_URL ,FILTER_NULL_ON_FAILURE ));
echo "<br>";

var_dump (filter_var ($url3 , FILTER_VALIDATE_URL ,FILTER_FLAG_QUERY_REQUIRED ));
echo "<br>";

var_dump (filter_var ($url2 , FILTER_VALIDATE_URL , 
["flags" => FILTER_NULL_ON_FAILURE | FILTER_FLAG_PATH_REQUIRED | FILTER_FLAG_QUERY_REQUIRED] ));
echo "<br>";

var_dump(filter_var($url3, FILTER_VALIDATE_URL,
["flags" => FILTER_NULL_ON_FAILURE | FILTER_FLAG_PATH_REQUIRED | FILTER_FLAG_QUERY_REQUIRED]));
echo "<br>";

line ();



/*
      06 :  FILTER_VALIDATE_IP
            Flags for this filter :
                1: FILTER_NULL_ON_FAILURE => check if there  are ip or no
                2 : FILTER_FLAG_IPV4 => check if the ip is for version 4 
                3 : FILTER_FLAG_IPV6 => check if the ip is for version 6

*/
apply("FILTER_VALIDATE_IP");
$ip = "192.168.2.1";
$ip1 = "12h.125.5.0";
var_dump(filter_var($ip1, FILTER_VALIDATE_IP,  FILTER_NULL_ON_FAILURE ));
echo "<br>";
var_dump(filter_var($ip1, FILTER_VALIDATE_IP,  FILTER_FLAG_IPV6 ));
echo "<br>";
var_dump(filter_var($ip, FILTER_VALIDATE_IP, ["flags" => FILTER_NULL_ON_FAILURE | FILTER_FLAG_IPV4]));
echo "<br>";
var_dump(filter_var($ip, FILTER_VALIDATE_IP, ["flags" => FILTER_NULL_ON_FAILURE | FILTER_FLAG_IPV6]));
echo "<br>";
line();




/*
      07 : FILTER_VALIDATE_MAC
           Flag => FILTER_NULL_ON_FAILURE
*/
apply("FILTER_VALIDATE_MAC");
$mac = "00:00:5e:00d:53:af";
$mac1 = "00:00:5e:00:53:af";
var_dump(filter_var($mac, FILTER_VALIDATE_MAC));
echo "<br>";
var_dump(filter_var($mac, FILTER_VALIDATE_MAC ,FILTER_NULL_ON_FAILURE ));
echo "<br>";
var_dump(filter_var($mac1, FILTER_VALIDATE_MAC));
echo "<br>";
line();





/*
      08 : FILTER_VALIDATE_EMAIL
           Flag => FILTER_NULL_ON_FAILURE
*/
apply("FILTER_VALIDATE_EMAIL");
$email = "o@nnsa";
$email1 = "fatma2001@gmail.com";
var_dump(filter_var($email1, FILTER_VALIDATE_EMAIL , FILTER_NULL_ON_FAILURE ));
echo "<br>";
var_dump(filter_var($email, FILTER_VALIDATE_EMAIL , FILTER_NULL_ON_FAILURE ));
echo "<br>";
line();




/*   
      Rivision : filter_var(Value[Required], Filter[Optional], Options[Optional])

      09 : FILTER_VALIDATE_INT
           Flag => FILTER_NULL_ON_FAILURE
           Options => min_range
           Options => max_range
           Convert To Int On Success
*/
apply("FILTER_VALIDATE_INT");

$int1 = "90";
var_dump (filter_var ($int1 ,FILTER_VALIDATE_INT ));
echo "<br>";

$int2 = "A90";
var_dump (filter_var ($int2 ,FILTER_VALIDATE_INT , FILTER_NULL_ON_FAILURE));
echo "<br>";

$int = 90;
var_dump (filter_var ($int ,FILTER_VALIDATE_INT ));
echo "<br>";

// We can put range and check if the number is on this range by :
var_dump (filter_var (
    $int ,
    FILTER_VALIDATE_INT ,
    ["falgs" => FILTER_NULL_ON_FAILURE , "options" => ["min_range" => 50 , "max_range" => 100]]
));    
echo "<br>";


$int4 = 49;
$int5 = 101;
var_dump (filter_var (
    $int4 ,
    FILTER_VALIDATE_INT ,
    ["flags" => FILTER_NULL_ON_FAILURE, "options" => ["min_range" => 50, "max_range" => 100]]
));    
echo "<br>";


var_dump(filter_var(
    $int5,
    FILTER_VALIDATE_INT,
    ["flags" => FILTER_NULL_ON_FAILURE, "options" => ["min_range" => 50, "max_range" => 100]]
  ));    
echo "<br>";
line();




/*
        10 : FILTER_VALIDATE_FLOAT
             Flag => FILTER_NULL_ON_FAILURE
             Options => min_range
             Options => max_range
             Convert To Float On Success
*/

apply ("FILTER_VALIDATE_FLOAT");
$float = 90.5;

var_dump(filter_var(
    $float,
    FILTER_VALIDATE_FLOAT,
    ["flags" => FILTER_NULL_ON_FAILURE, "options" => ["min_range" => 50, "max_range" => 100]]
  ));
  echo "<br>";
  line();




  /*
         11 : FILTER_SANITIZE_EMAIL
              Remove All But Letters + Digits + !#$%&#038;'*+-=?^_`{|}~@.[]
              Test ¥
  */

  apply("FILTER_SANITIZE_EMAIL");
  $email = "o@n  ¥   n.sa";
  var_dump(filter_var($email, FILTER_SANITIZE_EMAIL));
  echo "<br>";
  line();




  /*
        12 : FILTER_SANITIZE_NUMBER_INT
             Remove All But Digits, +, -
  */

apply("FILTER_SANITIZE_NUMBER_INT");
$int = "100 + !@@@LHKLJKJFKLJKLJFKL  f;ldkf;lsdkfl;ksdf;lkdsf===-100";
var_dump(filter_var($int, FILTER_SANITIZE_NUMBER_INT));
echo "<br>";
line();




/*
       13 : FILTER_SANITIZE_NUMBER_FLOAT
             Remove ALL But Digits, +, - And Optionally [.,eE]
             Flags => FILTER_FLAG_ALLOW_THOUSAND
             Flags => FILTER_FLAG_ALLOW_FRACTION

*/
apply ("FILTER_SANITIZE_NUMBER_FLOAT");
$float = "1,950,150.65AAASSS    sdfdsfsdfsdf@@@@41";

  var_dump(filter_var(
    $float,
    FILTER_SANITIZE_NUMBER_FLOAT,
    ["flags" => FILTER_FLAG_ALLOW_THOUSAND | FILTER_FLAG_ALLOW_FRACTION]
  ));

  echo "<br>";
  line();





  /*
         14 : FILTER_SANITIZE_URL
              Remove All But Letters + Digits + $-_.+!*'(),{}|\\^~[]`<>#%";/?:@&=.
              Test ¥ + Space
  */
  apply("FILTER_SANITIZE_URL");
  $url = "https://el         zer¥¥¥¥¥o.org";
  var_dump(filter_var($url, FILTER_SANITIZE_URL));
  echo "<br>";
  line();



  