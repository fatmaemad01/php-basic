<?php

// String Acsess $ Update Element => التعامل مع النصوص : الوصول لها وتحديثها
$string = "fatma";
echo "First Letter is $string[0] <br>";                // التعامل مع النص كأنه مصفوفة ، الوصول للبيانات من خلال اندكس
echo "3th Letter is $string[2] <br>";
echo "The Number of letter is ".strlen($string)."<br>";     // Strlen => function that return the number of charcter
echo "Last Letter is $string[-1] <br>";               // العدد السالب يبدأ العد من النهاية 
echo "Last Letter is {$string[strlen($string)-1]} <br>";    // يمكن الوصول لاخر حرف من خلال الحصول على قيمة اخر مدخل
echo "$string <br>";
$string [0]= "F";             // Update data by its index
echo "$string <br>";
$string [5] = " "; 
$string [6] = "J";            // add new data by adding new index
echo "$string <br>";
echo "----------------------------- <br>";








  /*
    String Functions
    - lcfirst(String[Required]) => lower the first char only
    - ucfirst(String[Required]) => Upper the first char only
    - strtolower(String[Required]) => make all char in lower case
    - strtoupper(String[Required]) => make all char in upper case
    - ucwords(String[Required], Delimiters[Optional])  => upper the first char from all word 
    - str_repeat(String[Required], Count[Required])  => repeat the string you need 
  */
echo lcfirst("Fatma Emad Jaber")."<br>";
echo ucfirst("fatma emad jaber")."<br>";
echo strtolower("FATMA EMAD JABER")."<br>";
echo strtoupper ("fatma emad jaber")."<br>";
echo ucwords ("fatma emad jaber")."<br>";
echo ucwords ("fatma emad|jaber" , "|")."<br>";   // هنا فصلنا بين الكلام باستخدام | فيعتبر ما قبله نص وما بعده نص فقط
echo str_repeat("Fatma Eamd ", 2)."<br>";      
echo "----------------------------- <br>";








  /*
    String Functions
    - implode(Separator[Optional], Array[Required]) => join() Is Alias
    - explode(Separator[Required], String[Required], Limit[Optional])
    - str_shuffle(String[Required])
    - strrev(String[Required])
    - trim(String[Required], CharsList[Optional])
    - ltrim(String[Required], CharsList[Optional])
    - rtrim(String[Required], CharsList[Optional])
      char that removed by trim [ Space "" , Tab \t , New Line \n , Carriage Return \r , Vertical Tab "\x0B" , NULL "\0 "]
  */

 $friends = ["Salma","Dana","Mera","Rama"];
 echo implode(" " , $friends)."<br>";     // Print the index with separator you need => space
 echo implode ("|", $friends)."<br>";     // separator => | 
 echo implode("_",$friends)."<br>";       // separator => _
 echo implode ($friends)."<br>";          // no separator .
 echo "----------------------------- <br>";


 $str = "Fatma Jaber Is Software Engineer"; 
 echo "<pre>";
 print_r (explode(" ", $str));     // هان تعاملنا مع الكلام على انه  مصفوفة وحددنا الفاصل اللي هيتوزعو ع اساسو
 echo "</pre>";
 echo "----------------------------- <br>";
 echo "<pre>";
 print_r (explode("I", $str));     // اعتبرت حرف هو الفاصل ، فصار اللي بعد الحرف جزء واللي قبلو جزء
 echo "</pre>";
 echo "----------------------------- <br>";
 echo "<pre>";
 print_r (explode(" ", $str , 0));     // هنا حطينا الحد هو 0 يعني مش رح يفصل اشي ، ولو حطينا واحد برضو نفس الاشي
 echo "</pre>";
 echo "----------------------------- <br>";
 echo "<pre>";
 print_r (explode(" ", $str , 3));     // will separate the string to 3 part
 echo "</pre>";
 echo "----------------------------- <br>";


 echo str_shuffle ("Fatma")."<br>";              // خربطة الحروف عند كل تحديث للصفحة
 echo strrev ("fatma")."<br>";                   // كتابة الكلمة بالعكس من النهاية للبداية
 echo "----------------------------- <br>";
 echo trim("   fatma emad   ", " ")."<br>";      // here we will not note the trimed , show it by length
 echo strlen ("   fatma emad   ")."<br>";
 echo strlen (trim("   fatma emad   ", " "))."<br>";      // يتم الحذف من الاطراف فقط ، لا يحذف ما بالوسط
 echo trim ("##fatma@###" , "#@")."<br>";
 echo trim ("##fatma@###" , "@")."<br>";
 echo rtrim ("##fatma@###" , "#@")."<br>";       // remove from right
 echo ltrim ("##fatma@###" , "#@")."<br>";       // remove from left
 echo "----------------------------- <br>";







   /*
    String Functions
    - chunk_split(String[Required], Length[Optional], End[Optional])
    - strlen(String[Required])
    - str_split(String[Required], Length[Optional])
    - strip_tags(String[Required], Allowed[Optional])
    - nl2br(String[Required], XHTML[Optional])
  */

  echo chunk_split("Elzero Web School" , 3, "|")."<br>"; //تقسيم الكلام من خلال الفاصل اللي بدنا ياه بعد عدد احرف اللي اخترناه
  echo strlen ("Fatma emad  ")."<br>";   // length
  echo "----------------------------- <br>";
  echo "<pre>";
  print_r(str_split("software engineering",3));  // each 3 char will be at index
  echo "</pre>";
  echo "----------------------------- <br>";
  echo "<pre>";
  print_r(str_split("software"));        // by default => each char will be at index
  echo "</pre>";
  echo "----------------------------- <br>";
  echo "<h3> Hello PHP </h3><br>";
  echo strip_tags ("<h3> Hello PHP </h3>")."<br>";          // remove tags 
  echo strip_tags ("<h3> Hello PHP </h3>" , "<h3>")."<br>";    // remove tags but make exception for what we need
  echo "----------------------------- <br>";
  echo nl2br ("Fatam \nEmad \nJaber")."<br>";      // here we can use \n to new line  
  //echo nl2br ("Fatam \nEmad \nJaber", false)."<br>";      // missunderstand
  echo "----------------------------- <br>";











  /*
    String Functions
    - strpos(String, Value to search , Start Position) => Search for char & Case-Sensitive (h != H)
    - strrpos(String, Value to search , Start Position) => start search from right $ Case-Sensitive
    - stripos(String, Value to search , Start Position) => search for char BUT its => Case-Insensitive
    - strripos(String, Value to search , Start Position) => search from right & Case-Insensitive
    - substr_count(String, Value to search , Start Position , Length you need to search in)
      substr_count => return how many time the char you need is found
  */

  var_dump(strpos("Hello Hello", "H")); // the first founding of "H" is at index 0        
  echo '<br>';
  var_dump(strpos("Hello Hello", "H", 3)); // start search from index 3 , so the "H" is found at index 6
  echo '<br>';
  var_dump(strpos("Hello Hello", "H", 6)); // 6
  echo '<br>';
  var_dump(strpos("Hello Hello", "h")); //  Its case sensitive so False => not found
  echo '<br>';
  var_dump(strpos("Hello Hello", "H", -2)); // start by backing 2 index from end then search SO False
  echo '<br>';
  var_dump(strpos("Hello Hello", "H", -5)); // 6
  echo '<br>';
  var_dump(strpos("Hello Hello", "H", -11)); // 0
  echo '<br>';
  var_dump(strrpos("Hello Hello", "H")); // return the last char which found so its at index 6
  echo '<br>';
  var_dump(strrpos("Hello Hello", "H", 5)); // 6
  echo '<br>';
  var_dump(stripos("Hello Hello", "h")); // the first char found at index 0
  echo '<br>';
  var_dump(strripos("Hello Hello", "h")); // the last char found at index 6
  echo '<br>';
  var_dump(substr_count("Hello Hello", "He")); // 2
  echo '<br>';
  var_dump(substr_count("Hello Hello", "He", 1)); // 1
  echo '<br>';
  var_dump(substr_count("Hello Hello", "He", 1, 6)); // 0
  echo '<br>';
  var_dump(substr_count("abcdabcda", "abcda")); // 1
  echo '<br>';
  echo "----------------------------- <br>";


 









    /*
    String Functions
    - parse_str(String[R], Array[R]) =>  separate the data you need 
    - quotemeta(String[R]) => foucs on string and mark anything else
    - str_pad(String[R], Length[R], String[O], Pad Flag[O]) => add anything you need to have the same serial
    --- STR_PAD_BOTH => the add from left & right
    --- STR_PAD_LEFT 
    --- STR_PAD_RIGHT
    - strtr(String[R], From[R], To[R]) || strtr(String[R], Array[R]) => translate thing to thing
  */
 
 parse_str ("name=fatma&email=fat@251&os=windows" , $query )."<br>";
 echo "<pre>";
 print_r($query);
 echo "</pre>";
 // here we can separate each element alone 
 echo $query["name"].'<br>';
 echo $query["email"].'<br>';
 echo $query["os"].'<br>';
 echo "----------------------------- <br>";

 echo " Hello () [] / * +  "."<br>";
 echo quotemeta (" Hello () [] / * +  ")."<br>";
 echo "<br>";
 
 echo str_pad ("5" , 6 , "0" , STR_PAD_BOTH)."<br>";
 echo str_pad ("5" , 6 , "0" , STR_PAD_RIGHT)."<br>";
 echo str_pad ("5" , 6 , "0" , STR_PAD_LEFT)."<br>";
 echo str_pad ("15" , 6 , "0" , STR_PAD_LEFT)."<br>";
 echo str_pad ("1155" , 6 , "0" , STR_PAD_LEFT)."<br>";
 echo str_pad ("10589" , 6 , "0" , STR_PAD_LEFT)."<br>";
 echo str_pad ("154755" , 6 , "0" , STR_PAD_LEFT)."<br>";
 echo "<br>";
 echo "<br>";
 

echo strtr ("F@tm@ em@d J@ber" , "@","a")."<br>";     // maybe for 1 char
// if there are more than 1 char we should use array
$chars = ["@" => "a" , "#" => "e"];
echo strtr ("F@tm@ #m@d J@b#r" , $chars )."<br>";
echo "----------------------------- <br>";
echo "<br>";










  /*
    String Functions
    --- both function replace value to another value you need  
    - str_replace(Find[R], Replace With[R], Data[R], Replace Count[O]) => Its Case-Sensitive
    - str_ireplace(Find[R], Replace With[R], Data[R], Replace Count[O]) => Its Case-IN_Sensitive
  */
  echo str_replace ("@" , "a","F@tm@ em@d J@ber", $r)."<br>";
  echo "the number of replacment = $r <br>";
  echo str_replace (["@" , "#"] , "F" , "F@tm@ #m@d J@b#r")."<br>"; // replace 2 value to same value
  echo str_replace (["@" , "#"] , ["a","e"] , "F@tm@ #m@d J@b#r")."<br>";
  echo "<br>";

  echo '<pre>';
  print_r(str_replace("One", 1, ["One", "Two", "Three", "One", "One"]));
  echo '</pre>';

  echo '<pre>';
  print_r(str_replace(["One" , "Two" , "Three"], [1 , 2 , 3], ["One", "Two", "Three", "One", "One"]));
  echo '</pre>';

  echo '<pre>';
  print_r(str_replace(["One" , "Two" , "Three"], [1 , 2 ], ["One", "Two", "Three", "One", "One"]));
  echo '</pre>';

  echo '<pre>';
  print_r(str_replace(["One" , "Two" , "three"], [1 , 2 , 3 ], ["One", "Two", "Three", "One", "One"]));
  echo '</pre>';             // case sensitive

  echo '<pre>';
  print_r(str_ireplace(["One" , "Two" , "three"], [1 , 2 , 3 ], ["One", "Two", "Three", "One", "One"]));
  echo '</pre>';            // case insensitive
  echo "----------------------------- <br>";
  echo "<br>";











    /*
    String Functions
    - substr_replace(String[Required], Replace With Or Insert[Required], Start[Required], Length[$])
    --- $ Positive Number => Length Of String To Be Replaced
    --- $ Negative Number => Characters Left At The End After Replacement
    --- $ 0               => Insert Instead Of Replace
  */

  echo substr_replace ("software engineering" , "E" , 0)."<br>";    // replace all char of new
  echo substr_replace ("software engineering" , "E" , 7)."<br>";
  echo substr_replace ("software engineering" , "E" , 7 , 3)."<br>";  // 3 char are replaced by E
  echo substr_replace ("software engineering" , "E" , 7 , -1)."<br>";  // take the last char and put it at the position you intered
  echo "----------------------------- <br>";
  echo "<br>";

  // More Example to understand
  echo substr_replace("OneTwo", 1, 0); // 1
  echo '<br>';
  echo substr_replace("OneTwo", 1, 3); // One1
  echo '<br>';
  echo substr_replace("OneTwo", 1, 5); // OneTw1
  echo '<br>';
  echo substr_replace("OneTwo", 1, -1); // OneTw1
  echo '<br>';
  echo substr_replace("OneTwo", 2, 2); // On2
  echo '<br>';
  echo substr_replace("OneTwo", 2, 2, 2); // On2wo
  echo '<br>';
  echo substr_replace("OneTwo", 2, 1, 4); // O2o
  echo '<br>';
  echo substr_replace("Elzero_Web_School", "A", 7, 3); // Elzero_A_School
  echo '<br>';
  echo substr_replace("Elzero_Web_School", "A", 7, -1); // Elzero_Al eb_School
  echo '<br>';
  echo substr_replace("Elzero_Web_School", "A", 7, -3); // Elzero_Aool eb_Sch
  echo '<br>';
  echo substr_replace("Elzero_Web_School", "A", 7, -9); // Elzero_Aeb_School
  echo '<br>';
  echo substr_replace("Elzero_Web_School", "A", 7, -10); // Elzero_AWeb_School
  echo '<br>';
  echo substr_replace("Elzero_Web_School", "@", 1, 0); // E@lzero_Web_School

  echo "<pre>";
  print_r(substr_replace(["OneTwo", "ThreeFour"], 1, 0));
  echo "</pre>";
  echo "----------------------------- <br>";
  echo "<br>";














  /*
    String Functions
    - wordwrap(String[R], Width[O = 75], Break_Char[O = "\n"], Cut_Long[O = False])
    - ord(String[R]) => return the ISC of char
    - chr(Int[R]) => return the char of ISC
    - similar_text(String_One[R], String_Two[R], Percent[O]) => Returns The Number Of Matching Characters
  */

  $str = "Welcome To To To T Elzeroo Web School Website Very_Very_Very_Long";

  echo strlen($str) . "<br>";
  echo wordwrap($str, 8, "<br>", True)."<br>";          // each word in new line 
  echo wordwrap($str, 8, "<br>", false)."<br>";
  echo ord("a")."<br>"; // 97
  echo chr(97)."<br>"; // a
  echo similar_text("Elz@ero", "Elz_eroo")."<br>";
  echo similar_text("Elzero", "Elzeroo", $perc)."<br>";  // النسبة المؤية للتشابه
  echo $perc."<br>";
  echo "----------------------------- <br>";
  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "<br>";
















  /*
    String Functions
    - strstr(String[Required], Search[Required], Before_Search[Optional] = False)
    --- => Alias [strchr]
    - stristr(String[Required], Search[Required], Before_Search[Optional] = False)
    --- Case-Insensitive
    - number_format(Number[Required], Decimals[Optional], Decimal_String[Optional], Separator[Optional])
  */

  echo strstr("Elzero Web", "W") . "<br>"; // Web    search of W
  echo strstr("Elzero Web", "z") . "<br>"; // zero Web
  echo strstr("Elzero Web", "W", True) . "<br>"; // Elzero
  echo strlen(strstr("Elzero Web", "W", True)) . "<br>"; // 7


  echo strstr("Elzero Web", "w") . "<br>"; // False becaise its Case-Sensitive
  var_dump(strstr("Elzero Web", "w"));
  echo '<br>';


  echo stristr("Elzero Web", "w") . "<br>"; // Web
  var_dump(stristr("Elzero Web", "w")); // Web
  echo '<br>';

  echo 10_000_000;
  echo '<br>';

  echo number_format(10000000.156023);       
  echo '<br>';
  echo number_format(10000000.156023, 3);     // تحديد  عدد الارقام العشرية التي نريد اظهارها
  echo '<br>';
  echo number_format(10000000.156023, 3, "@");    // تغيير الاشارة الفاصلة بين الكسور والصحيح
  echo '<br>'; 
  echo number_format(10000000.156023, 3, "@", "#");       // تغيير العلامة الفاصلة بين الارقام الصحيحة

