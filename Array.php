<?php

/*
    Array Functions

    01 : array_chunk(Array[Required], Length[Required], Preserve_Key[Optional])
    --- Split An Array Into Chunks  (split it to many part which have length you need)
    --- Preserve_Key : true || false
    ------ [False => Default] => Reindex The Keys as 0 , 1 ...
    ------ [True]  => keep the key you have 

*/

$friends = ["Osama", "Ahmed", "Sameh", "Mahmoud", "Gamal"];
echo "<pre>";
print_r (array_chunk($friends , 2));             // split the array to multi_array which each array have 2 index 
echo "</pre>";
echo "------------------------------<br>";


$countries = ["EG" => "Egypt", "KSA" => "Saudi Arabia", "Sy" => "Syria", "USA" => "United States"];
echo "<pre>";
print_r (array_chunk($countries, 2));            // here the key was changed , because the default of preserve key is false 
echo "</pre>";
echo "-----------------------------<br>";


echo "<pre>";
print_r (array_chunk($countries, 2 , true));       // here we was keep the key
echo "</pre>";
echo "-----------------------------<br>";






/*
    02 : array_change_key_case(Array[Required], Case[Optional])
    --- Changes The Case Of All Keys In An Array
    --- Case : Lower , Upper
    ------ [CASE_LOWER => Default] Changes The Keys To Lowercase
    ------ [CASE_UPPER] Changes The Keys To Uppercase
 */


echo "<pre>";
print_r (array_change_key_case ($countries , CASE_UPPER));
echo "</pre>";
echo "-----------------------------<br>";







/*
    03 : array_combine(Array_Of_Keys[Required], Array_Of_Values[Required])
    to combine 2 array  which have the same length
*/
$keys = ["A", "O", "K"];
$values = ["Ahmed", "Osama", "Kamal"];

echo "<pre>";
print_r (array_combine($keys , $values));
echo "</pre>";
echo "-----------------------------<br>";







/* 
    04 : array_count_values(Array[Required])
    => Counts All The Values Of An Array
*/

$counting = ["B", "A", "A", "B", "B", "B", "C"];
echo "<pre>";
print_r (array_count_values($counting));
echo "</pre>";
echo "------------------------------<br>";







/* 
    05 : array_reverse(Array[Required], Preserve[Optional])
    --- Reverse Array Elements
    --- Preserve : false (new indexing) || true (keep the prev index)
*/

$family = ["Osama", "Ahmed", "Sameh", "Mahmoud", "Gamal", ["Eman", "Noha"]];

echo '<pre>';
print_r($family);
print_r(array_reverse($family, True));
echo '</pre>';
echo "------------------------------<br>";







/*
    06 : array_flip(Array[Required])
    --- Exchange Keys With Its Values , make Key => value , value => Key
*/
$countries = ["EG" => "Egypt", "KSA" => "Saudi Arabia", "Sy" => "Syria", "USA" => "United States"];

echo '<pre>';
print_r(array_flip($countries));
echo '</pre>';
echo "------------------------------<br>";







/* 
    07 : count(Array[Required], Mode[Optional])
    --- Count Array Elements
    --- Mode : 0 || 1
            0 => Default => Does Not Count Elements Of Multidimensional Arrays (nested array dosnt count)
            1 => Count Elements Of Multidimensional Arrays
*/
$counting = [
    "A",
    "B",
    "C",
    [1, 2, 3]
  ];
  echo count($counting, 0)."<br>";
  echo count($counting, 1)."<br>";
  echo "--------------------------<br>";







/*
     08 : in_array(Search[Required], Array[Required], Type[Optional])
    --- Checks If A Value Exists In An Array
*/
$search = ["1", 2, 3, 4];
if (in_array(1 ,  $search)){        // here we search value without care of type
    echo "The value is found";
}
echo "<br>";
echo "<br>";

$search = ["1", 2, 3, 4];
if (in_array(1 ,  $search , true)){        // here we search value with care of type
    echo "The value is found";
}else {
    echo "NOT FOUND";
}

echo "<br>";
echo "-------------------------------<br>";







/*
    09 : array_key_exists(Key[Required], Array[Required])
    --- Check If Key Is Exists
*/
$courses = [
    "Javascript" => 95,
    "PHP" => 100,
    "HTML" => 60,
    "CSS" => 65
  ];

  if (array_key_exists("PHP" , $courses)){
    echo "The course is found and the price = ".$courses["PHP"];
  }
  echo "<br>";
  echo "-------------------------<br>";







  /* 
      10 : array_keys(Array[Required], Value[Optional], Type[Optional])
      --- Return The Array Keys
      --- Type : false (dont check type) || true (check type)
  */
 
  $friends = ["Osama", "Ahmed", "Sameh", "Mahmoud", "Gamal", "Osama", "Eman", 1, "1"];

  echo '<pre>';
  print_r(array_keys($friends));        // the key for all value
  echo '</pre>';

  echo '<pre>';
  print_r(array_keys($friends, "Osama"));     // the key for spasific value
  echo '</pre>';

  echo '<pre>';
  print_r(array_keys($friends, 1, True));     // the key for spasific value with the same type
  echo '</pre>';
  echo "-------------------------<br>";








  /*
      11 : array_values(Array[Required])
      --- Return All The Values Of An Array without its key
  */
  $countries = ["EG" => "Egypt", "KSA" => "Saudi Arabia", "Sy" => "Syria", "USA" => "United States"];

  echo '<pre>';
  print_r(array_values($countries));
  echo '</pre>';
  echo "-------------------------<br>";






  /*
     12 : array_pad(Array[Required], Size[Required], Value[Required])
     --- Pad Array To The Specified Length With A Value
     --- Negative Value Add Elements Before Original Items
     --- If Size < Array Length Nothing Will Be Deleted
  */
  $pad = ["A", "B", "C", "D"];

  echo '<pre>';
  print_r(array_pad($pad, 10, "@"));
  echo '</pre>';

  echo '<pre>';
  print_r(array_pad($pad, -10, "@"));        // before original items
  echo '</pre>';

  echo '<pre>';
  print_r(array_pad($pad, 2, "@"));
  echo '</pre>';
  echo "-------------------------<br>";





  /*
      13 : array_product(Array[Required])
      --- Calculate The Product (*) Of Values In An Array => Return Int || Float
      --- In Mathematics, A Product Is The Result Of Multiplication
  */
  $product = [10, 5, 2, 10];
  echo array_product($product) . "<br>";
  echo "-------------------------<br>";






  /*
      14 : array_sum(Array[Required])
      -- Calculate The Sum Of Values In An Array

  */
  $sum = [10, 5, 2, 10];
  echo array_sum($sum);
  echo "<br>";
  echo "-------------------------<br>";










  /* 
     15 : 
         * current(Array[Required]) => Return The Current Element In An Array
         * next(Array[Required]) => Advance The Internal Pointer
         * prev(Array[Required]) => Rewind The Internal Pointer
         * reset(Array[Required]) => Put The Internal Pointer On First Element
         * end(Array[Required]) => Put The Internal Pointer On Last Element
  */
  
  $friends = ["Osama", "Ahmed", "Sameh", "Mahmoud", "Gamal", "Eman"];

  echo current($friends) . "<br>"; // "Osama"
  echo next($friends) . "<br>"; // "Ahmed"
  echo current($friends) . "<br>"; // "Ahmed"
  echo next($friends) . "<br>"; // "Sameh"
  echo current($friends) . "<br>"; // "Sameh"
  echo prev($friends) . "<br>"; // "Ahmed"
  echo reset($friends) . "<br>"; // "Osama"
  echo current($friends) . "<br>"; // "Osama"
  echo end($friends) . "<br>"; // "Eman"
  echo current($friends) . "<br>"; // "Eman"
  echo "-------------------------------<br>";

  



  

  /*
      16 : array_merge(Array[Required], Other_Array/s[Optional])
          --- Merge(combine) One Or More Arrays
          ------ Later Array Key With The Same Name Override The Value Of The Previous One
          ------ Numeric Key Will Be Renumbered
  */
  $merge_one = ["one"=> "PHP" , "Two" => "JS" , "Three" => "Python"];
  $merge_two = ["one" =>"HTML" , "Four"=>"CSS"];

  echo "<pre>";
  print_r (array_merge($merge_one , $merge_two));        // override the value which have the same key      
  echo "</pre>";
  echo "-------------------------------<br>";
  
  $merge_three = [10 => "PHP", 20 => "CSS", 30 => "JavaScript"];
  $merge_four = [40 => "Python", "10" => "Go"];

  echo '<pre>';
  print_r(array_merge($merge_three, $merge_four));     // here the key will be re_index without keep the the original key
  echo '</pre>';
  echo "-------------------------------<br>";









  /*
       17 : array_replace(Array[Required], Replacement/s[Optional])
          --- Replaces Elements From Passed Arrays Into The First Array
          ------ Same Key => Value In Second Array Replace Same Key => Value In First Array
          ------ If Key In Second Array Not Found In Fisrt Array It Will Be Created
  */
  $main = ["One" => "PHP", "Two" => "CSS", "Three" => "JavaScript"];
  $replace = ["One" => "HTML", "Four" => "Python"];

  echo '<pre>';
  print_r(array_replace($main, $replace));
  echo '</pre>';

  echo '<pre>';
  print_r(array_replace($merge_three, $merge_four));      // here will replace the key , without reindex
  echo '</pre>';
  echo "-------------------------------<br>";







  /*
     18 : array_rand(Array[Required], Num[Optional])
    --- Pick One Or More Random Keys Out Of An Array  
  */

  $nums = [ 15 , 20 , 17 , 19 , 28 , 98 ];
  echo array_rand($nums)."<br>";            // here will echo the index not value
  echo $nums[ array_rand($nums)]."<br>";    // here will echo the value
  echo "-------------------------------<br>";
 


  $chars = ["A" , "B" , "C" , "D" , "E" , "F"];
  echo $chars [array_rand ($chars)]."<br>";       // by default : one value will be echo 

  // if we need to echo more than one value , we will store it in array , but here will print indexs 
  echo "<pre>";
  print_r(array_rand($nums , 3));
  echo "</pre>";
  echo "-------------------------------<br>";







  /* 
      19 : shuffle(Array[Required])
           --- Shuffle An Array (all array) => keep it in array 
  */
 shuffle ($chars);
 echo "<pre>";
 print_r($chars);
 echo "</pre>";
 echo "-------------------------------<br>";







 /*
     20 : array_shift(Array[Required])
        --- Shift (Cut) An Element Off The Beginning Of Array
        --- This Function Will Reset  & Reindex the values & pointer
*/
 
$Char = ["A" , "B" , "C" , "D"];

$first = array_shift ($Char);
echo $first."<br>";

echo "<pre>";
print_r($Char);
echo "</pre>";
echo "-------------------------------<br>";







/*
     21 : array_pop(Array[Required])
         --- Pop The Element Off Ehe End Of Array
         --- This Function Will Reset & Reindex the values & pointer
*/

$last = array_pop ($Char);
echo $last."<br>";

echo "<pre>";
print_r($Char);
echo "</pre>";
echo "-------------------------------<br>";








/*
    22 : array_push(Array[Required], Values[Optional])
       --- Push (add) One Or More Elements Onto The End Of Array
       --- You Can Use $arr[]
*/

array_push($Char , "X" , "Y" , "Z");
echo "<pre>";
print_r ($Char);
echo "</pre>";
echo "-------------------------------<br>";
 
// we can add nested array like this
array_push ($Char , ["H" , "L" ,"M"]); 
echo "<pre>";
print_r ($Char);
echo "</pre>";
echo "-------------------------------<br>";

// if we need to add one element to the end of array , we can add in direct without use push function  
$Char [] = "N";
echo "<pre>";
print_r ($Char);
echo "</pre>";
echo "-------------------------------<br>";







/*
     23 : array_unshift(Array[Required], Values[Optional])
        --- Add One Element In The Beginning Of An Array
        --- This Function Will Reset => "reset()" The Input Array Pointer
*/

array_unshift ($Char , "1" , "2");
echo "<pre>";
print_r ($Char);
echo "</pre>";
echo "-------------------------------<br>";








/* 
     24 :  array_slice(Array[Required], Start[Required], Length[Optional], Preserve_Keys[Optional])
        --- Extract A Slice Of The Array => take part from array
          => Start : index you need start from it
          => Length : the length you need (you can dosent set it , and can make it negative)
          => Preserve Keys : false (Default => Reset Keys) || true (keep the key as original)
             --  If Array Have String Keys, It Will Always Preserve The Keys
*/

$Chars = ["A", "B", "C", "D", "E", "F", "G"];
$chars_with_string_keys = ["A" => 1, "B" => 2, "C" => 3];
$chars_with_numeric_keys = [10 => 1, 20 => 2, 30 => 3];

echo "<pre>";
print_r (array_slice ($Chars , 2));
print_r (array_slice ($Chars , 2 , 3));
print_r (array_slice ($Chars , 2 , -1));    // يعني خد كل العناصر من البداية اللي اخترتها ما عدا الاخير
print_r (array_slice ($Chars , 2 , -2));    // البداية من الاندكس اللي بدنا ياه والطول لحد اخر 2
print_r (array_slice ($Chars , 2));
echo "</pre>";
echo "-------------------------------<br>";


echo "<pre>";
print_r(array_slice($chars_with_string_keys , 1));        // here keep the key because it was chars  
print_r(array_slice($chars_with_numeric_keys , 0 , 3));        // here did'nt keep the key because it was number  
// if we need to keep the key when it was number we should => Preserve_Keys = true
print_r(array_slice($chars_with_numeric_keys , 0 , 3 , true));        // here keep the key because it was number  and Preserve_Keys = true
echo "</pre>";
echo "-------------------------------<br>";


// NOTE : here we dont change the original array , we just take parts 

echo "<pre>";
print_r  ($Chars);
echo "</pre>";
echo "-------------------------------<br>";







/*
        25 : array_splice(Array[Required], Start[Required], Length[Optional], Array[Optional])
           --- Remove A Portion Of The Array And Replace It With Something Else
            => Start : index you need start from it
            => Length : the length you need (you can dosent set it , and can make it negative)
            => Array : we can replace the removing data with another data 
        NOTE : here we are change the content of array maybe remove || replace   
*/

$Nums = [10, 20, 30, 40, 50, 60, 70];
echo "<pre>";
/* 
   example 01 :
   print_r  (array_splice($Nums , 1));             // remove all value from index 1 to end
   print_r($Nums);                                 // only 10 stay at array
*/

/* 
   example 02 :
   print_r(array_splice ($Nums , 2 , 3));          // remove value which have index 2,3,4
   print_r($Nums); 
*/

/*
   example 03 :
   print_r(array_splice ($Nums , 1 , -1));          // remove value from index 1 to -1
   print_r($Nums); 
*/

/*
   example 04  :
   print_r(array_splice ($Nums , 2 , 2 , ["one", "two"]));          // replace the removing value by "one , two".
   print_r($Nums); 
 */

 /*
   example 05  :
   print_r(array_splice ($Nums , 2 , 1 , ["one", "two"]));          // replace the removing value by "one " & add the new value after it
   print_r($Nums); 
 */

/*
   example 06  : 
   print_r(array_splice ($Nums , 2 , 2 , "one"));          // replace 2 value by "one".
   print_r($Nums); 
*/

/* example 07 : */
print_r(array_splice($nums, 2, 1, "One"));
print_r($nums);

echo "</pre>";
echo "-------------------------------<br>";
















/*
     26 : sort(Array[Required], Flag[Optional])
         -- Sort An Indexed Array In Ascending Order  
     27 : rsort(Array[Required], Flag[Optional])
         -- Sort An Indexed Array In Descending  Order
*/

$names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Sameh", "Gamal"];
sort ($names);
echo "<pre>";
print_r ($names);
echo "</pre>";
echo "---------------------------------<br>";

rsort ($names);
echo "<pre>";
print_r ($names);
echo "</pre>";
echo "---------------------------------<br>";




/*
     28 : asort(Array[Required], Flag[Optional])
        -- Sort An Associative Array In Ascending Order According To The Value

     29 : arsort(Array[Required], Flag[Optional])
        -- Sort An Associative Array In Descending Order According To The Value
*/
$countries = ["S" => "Syria", "E" => "Egypt", "I" => "Iraq", "Q" => "Qatar"];

asort ($countries);
echo "<pre>";
print_r ($countries);
echo "</pre>";
echo "---------------------------------<br>";

arsort ($countries);
echo "<pre>";
print_r ($countries);
echo "</pre>";
echo "---------------------------------<br>";



/*
      30 : ksort(Array[Required], Flag[Optional])
         -- Sort An Associative Array In Ascending Order According To The Key

      31 : krsort(Array[Required], Flag[Optional])
         -- Sort An Associative Array In Descending Order According To The Key
*/
$Countries = ["2" => "Syria", "4" => "Egypt", "1" => "Iraq", "3" => "Qatar"];

Ksort ($Countries);
echo "<pre>";
print_r ($Countries);
echo "</pre>";
echo "---------------------------------<br>";

Krsort ($Countries);
echo "<pre>";
print_r ($Countries);
echo "</pre>";
echo "---------------------------------<br>";




/*
      32 : natsort(Array[Required], Flag[Optional])
         -- Sorts An Array By Using A "Natural Order" Algorithm
*/
$files = ["Photo1.png", "Photo20.png", "Photo3.png"];

sort ($files);
echo "<pre>";
print_r ($files);
echo "</pre>";
echo "---------------------------------<br>";      // هان رتبها حسب 1,2,3 زي ما قرأها الجهاز



natsort ($files);
echo "<pre>";
print_r ($files);
echo "</pre>";
echo "---------------------------------<br>";      // هان رتبها حسب 1,2,3 زي قراءة وترتيب الانسان







/*
     33 : array_map(Callback Function[Required], Array[Required], Other Arrays[Optional])
        -- call function to apply it for all array element
*/

 /*
 function add_title ($first){
    return "MR. ".$first ;
}
*/

$first_names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Sameh", "Gamal"];
$last_names = ["Ameer", "Samy", "Shady", "Amr", "Mohamed", "Ibrahim"];

echo "<pre>";
print_r (array_map (fn ($f) => "Mr.$f"  , $first_names));          // here we make anynomus function
echo "</pre>";
echo "---------------------------------<br>";


function say_hello ($f , $l){
    return "Hello MR.$f $l " ;
}

echo "<pre>";
print_r (array_map ("say_hello" , $first_names , $last_names));
echo "</pre>";
echo "---------------------------------<br>";







/*
      34 : array_filter(Array[Required], Callback Function[Required], Flag[Optional])
        --- Filter Values Of An Array Using A Callback Function
        --- Flag : ARRAY_FILTER_USE_KEY || ARRAY_FILTER_USE_BOTH || 0 Default => Send Value As Arguments
*/
$nums = [
    1 => 3,
    6 => 1,
    3 => 2,
    4 => 8,
    5 => 4
  ]; 

function nums_filter($n){
    return $n > 4 ;
}

echo "<pre>";
print_r (array_filter($nums , "nums_filter"));      // here will filter the value
echo "</pre>";
echo "---------------------------------<br>";


echo "<pre>";
print_r (array_filter($nums , "nums_filter" , ARRAY_FILTER_USE_KEY));      // here will filter the key
echo "</pre>";
echo "---------------------------------<br>";


function num_filter($n1 , $n2){
    return $n1 > 4 || $n2 > 4 ;
}

echo "<pre>";
print_r (array_filter($nums , "num_filter" , ARRAY_FILTER_USE_BOTH));      // here will filter the key & value
echo "</pre>";
echo "---------------------------------<br>";







  /*
    35 : array_reduce(Array[Required], Callback Function[Required], Initial_Value[Optional])
       --- Reduce The Array until reach to Single Value
       --- Carry => The Value Of The Previous Iteration || Initial Value
       --- Item => The Value Of The Current Iteration

  */

  function add($carry, $item) {
    echo "$carry<br>";
    echo "$item<br>";
    echo $carry + $item . "<br>";
    echo "###########<br>";
    return $carry + $item;
  }

  $nums = [10, 20, 50, 100, 10];

  echo array_reduce($nums, "add", 100);