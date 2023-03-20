<?php $Username = "fatma"?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo "PHP PROJECT ||  $Username";?></title>
  </head>
  <body>
    <div><?php echo 'We Love ';?></div>
    <div><?php echo ' el zero channnel';?></div>
    <?php 


    // type of comment (single & multiLine)
    echo '<br>';
    /*echo 'Prevent Me From Running Please';*/    /*multiLine & single comment*/
    echo '<br>';
    # echo 'Prevent Me From Running Please';      # single line comment
    echo '<br>';
    // echo 'Prevent Me From Running Please';     // single line comment

   /* My Application
      Version 1.0
      Created By Elzero */



    # Data Type: String , int , float , bool , array 
    
    
    
    # Type Conversion
    echo 2 + '6';           //  assume 6 as int and add it to 2
    echo '<br>';
    echo gettype( 2+'6');   //  the result = 8 , its type is int
    echo '<br>';
    echo true;              // true = 1 ,  false = 0   ,   1 & 0 => bool 
    echo '<br>';
    echo gettype(true);  
    echo '<br>';
    echo true + true;       // 1+1 = 2 , 2=> int
    echo '<br>';
    echo gettype(true+true);  
    echo '<br>';
    echo 5 + '9 size';      // 5+9=14 , 14=> int (but this give us warning , solve it by casting)
    echo '<br>';
    echo gettype(5 + '9 size');     
    echo '<br>';
    echo 5 + 12.6;         // 17.6 => double 
    echo '<br>';
    echo gettype(5+12.6);
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';




    

    # CASTING
    echo 2 + (int)'3 size';           // casting 3 from string to int
    echo '<br>';
    echo gettype(2 + (int)'3 size');  // 2+3 = 5 => (int)
    echo '<br>';

    echo (int)7.5 + 3;               // casting 7.5 from double to int 
    echo '<br>';
    echo gettype((int)7.5 + 3);      // 7+3 = 10 => int
    echo '<br>';

    echo (int)(13.5 + 13.5);         // casting (13.5+13.5) from double type to int
    echo '<br>';
    echo gettype ( (int)(13.5 + 13.5));  // 13.5 + 13.5 = 27.0 , after casting happen the result = 27 => int  
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';






 
    # Boolean and converting to boolean , any empty thing return false , if has value return true
    var_dump ((bool) 0);             // 0 => return false
    echo '<br>';
    var_dump ((bool) '');            // empty string or string contain 0 => return false
    echo '<br>'; 
    var_dump ((bool) array());       // empty array => return false
    echo '<br>';
    var_dump ((bool) []);            // empty array => return false
    echo '<br>';
    var_dump ((bool) 'fatma');       // String has value => return true
    echo '<br>';
    var_dump ((bool) 9);             // any number dont equal 0 => return true
    echo '<br>';
    var_dump ((bool) [3]);           // array has any values => return true
    echo '<br>';
    var_dump ((bool) array(3));      // array has any values => return true
    echo '<br>';
    var_dump ((bool) '0');           // zero as string => empty
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';






    
    # String and Escaping ,,, to print single '' or double " " cotation or Slach \ in the echo statment
    echo ' Hello php ';           // result => Hello php
    echo '<br>';        
    echo " Hello php ";           // result => Hello php
    echo '<br>';
    echo " hello 'php'";          // result => Hello 'php'
    echo '<br>';
    echo 'Hello " php" ';         // result => Hello "php"
    echo '<br>';
    // puting back slash before the ' & " & \ => this lead to print the sign after slash
    echo " hello \"php\" ";       // result => Hello "php"   
    echo '<br>';
    echo ' Hello \'php\'';        // result => Hello 'php'
    echo '<br>';
    echo 'Hello \\php\\ ';        // result => Hello \php\
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';







             // Define the variable

     // Heredoc & Nowdoc => this use when we have a lot of escaping  

    /* -- At heredoc when we put variable the result will show the value of this variable , 
       -- we can use " " or dont use it   */
    $name = 'Fatma';  
    echo <<<here
    hello php 
    speical characterstic $$$ ''''' """" \\\\\\
    hello my name is $name
    here;
    echo '<br>';
    echo '<br>';
    /* -- But at nowdoc when we put variable the result will show the variable as we write without value,
       -- to speichalize it we must put it in single coats ' '  */
    echo <<<'Now'
    hello php 
    speical characterstic $$$ ''''' """" \\\\\\
    hello my name is $name
    Now;
    echo '<br>';
    


    echo '<ul>';
    echo'<li>'. $name .'</li>';        // print the value of variable
    echo'<li> $name  </li>';           // print $name as we write
    echo'<li> $name  </li>';
    echo'<li> $name  </li>';
    echo'</ul>';
    echo '<br>';


    // Example of Heredoc
    echo <<< "ulLinks"
    <ul>
    <li> $name  </li>
    <li> $name  </li>
    <li> $name  </li>
    <li> $name  </li>
    </ul>
    ulLinks;
    echo '<br>';
    echo '<br>';
    echo '<br>';





    // Array 
    echo'<pre>';        // use pre to print the array as we write 
    print_r([           // we cant use echo to print the array
      'A'=> 'Ahmed' ,
      'B'=> 'Basem' ,
      'C'=> 'City' ,
      'Dana' ,          // here will put automatic index and start from 0 
      'Salma' ,         // index => 1
      '9'=> 'fatma' ,   // index => 9
      'Gan',            // index => 10
      '1'=> 'Rana' ,    // override
      'Names'=>[
        'osama ',
        'Khaled',
        'Lena'=>[       // array inside index
             'lina',
             'leena',
             'Lona0'
          ]]]);
    echo'</pre>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';







    // Variables : $ variable name = value
    $a = "fatma";          
    $$a = "emad";        // we define variable depend another  variable , we can use it => $fatma , $$a 
    $$$a = "jaber";      // we define variable depend another  variable , we can use it => $emad , $$fatma , $$$a
    echo $a;
    echo '<br>';
    echo $$a;
    echo '<br>';
    echo $$$a;
    echo '<br>';
    echo $fatma;
    echo '<br>';
    echo $emad;
    echo '<br>';
    echo "${a}";         // to print variable without wrong , the result => fatma
    echo '<br>';
    echo "${$a}";        // result => emad
    echo '<br>';
    echo "${$$a}";       // result => jaber
    echo '<br>';
    echo $$fatma;        // result => jaber
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';








    // Assign by value 
    $A = "Asmaa";
    $B = $A;                // the value of $B = "Asmaa"
    $B = "Salma";           // here override is happen
    $A = "Reema";           // override 
    echo $A;                // result => Reema (the last defined value) 
    echo '<br>';
    echo $B;                // result => Samla
     // --- this mean $A = $B if we dont redefine any variable
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';




    // Assign by Reference
    $aa = "Ali";
    $bb = &$aa;            // (&) this sign mean reference
    $bb = "Rami";          // override $bb and $aa 
    $aa = "Khaled";        // override $aa and $bb  because the variable refer to another variale 
    echo $aa;
    echo '<br>';
    echo $bb;
    // --- this mean the variables always equal each other  
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';






    
    /* 
    --- CONSTANT
    --- we define constants in define("Name of con as string" , mixed value) ,
    --- name of constant must be upercase ...
    --- we cant give the same name for more than 1 constant 
    */
    define("DB_NAME", "SOFTWARE");
    define("DB_NUMBER" , 5);
    echo DB_NAME;
    echo '<br>';
    echo  DB_NUMBER;
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';







    
  /*
    --- Some constant that will need it 
    Pre-Defined Constants [Case Sensitive]
    - PHP_VERSION
    - PHP_OS_FAMILY
    - PHP_INT_MAX
    - DEFAULT_INCLUDE_PATH

    Magic Constants [Case Insensitive]
    - __LINE__          => line number
    - __FILE__          => Path of file 
    - __DIR__           => Path of directory

    Reserved Keywords            // we cant name any variable or function as this constant 
    - break
    - clone

  */

    define("BREAKS", "AA");    // breaks not break
    echo php_uname();          // result => user name of device 
    echo '<br>';
    echo PHP_VERSION;           // php version which you use it
    echo '<br>';
    echo __LINE__;
    echo '<br>';
    echo __FILE__;
    echo '<br>';
    echo __dir__;
    echo '<br>';
    echo BREAKS;
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';







    // Operators => [ + , - , * , / , % , ** ] 
    echo 9 + 6;          
    echo '<br>';
    echo gettype(9 + 6);               // int + int => int
    echo '<br>';
    echo 2.6 + 2.7 ;    
    echo '<br>';
    echo gettype(2.6 + 2.7);           // double + double => double
    echo '<br>';

    echo 9 - 6;
    echo '<br>';
    echo gettype(9 - 6);               // int - int => int
    echo '<br>';
    echo 2.6 - 2.7 ;
    echo '<br>';
    echo gettype(2.6 - 2.7);           // double - double => double 
    echo '<br>';

    echo 9 * 6;                        
    echo '<br>';
    echo gettype(9 * 6);                // int * int => int
    echo '<br>'; 
    echo 2.6 * 2.7 ;
    echo '<br>';
    echo gettype(2.6 * 2.7);            // double * double = double
    echo '<br>';

    echo 6 / 3;
    echo '<br>';
    echo gettype( 6 / 3);              // int / int => int or double
    echo '<br>';
    echo 3 / 9;
    echo '<br>';
    echo gettype (3 / 9);
    echo '<br>';
    echo 10.5 / 2 ;
    echo '<br>';
    echo gettype (10.5 / 2);           // int / double OR double / int OR double/ double => double
    echo '<br>';
    
    echo 30 % 7 ;
    echo '<br>';
    echo 6 % 2;
    echo '<br>';
    echo 20.5 % 4 ;
    echo '<br>';

    echo 2 ** 4 ;                     // 2*2*2*2        الأسس          
    echo '<br>';
    echo 3 ** 2 ;                     // 3*3 
    echo '<br>';

    echo "50";                       
    echo '<br>';
    echo gettype("50");              // String 
    echo '<br>';
    echo +"50";                      // Identity=> (+($a)) convert variable type from string to int 
    echo '<br>';
    echo gettype (+"50");            // int
    echo '<br>';

    echo "-50";                       
    echo '<br>';
    echo gettype("-50");              // String => -50 
    echo '<br>';
    echo -"-50";                      // Identity=> (-($a)) convert variable type from string to int & give inverse number
    echo '<br>';
    echo gettype (-"-50");            // int => 50
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';







    // Assign operator [+= , -= , *= , /= , **= , %=]
    $s = 15 ; 
    $s += 5 ;          //  As =>  $s = $s + 5 
    echo $s;
    echo '<br>';

    $r = 6 ;
    $r -= 2;           // As => $r = $r - 2
    echo $r; 
    echo '<br>';

    $e = 2 ;
    $e **= 5;           // As => $e = $e ** 5 
    echo $e;
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';






    // Comparsion operator [ == , != , <> , === , !== , > , >= , < , <= ,  ] , to compare 2 or more variable

    var_dump (100 == 100);           // Are the value of data equal ? (value without type)
    echo '<br>';
    var_dump (100 == "100");
    echo '<br>';
    var_dump (100.1 == 100);
    echo '<br>';
    echo "------------------";
    echo '<br>';

    var_dump (100 != 100);          // !=  , <> => not equal
    echo '<br>';
    var_dump (100 != 50 );
    echo '<br>';
    var_dump( 2 <> 20);
    echo '<br>';
    echo "------------------";
    echo '<br>';


    // identical => test if data & data type are equal ? => (===)

    var_dump (100 === 100);             // the same value & same data type  
    echo '<br>';
    var_dump(100 === "100");            // Same value but data type are diferent
    echo '<br>';
    var_dump (100 === 100.0);           // Same value but data type are diferent
    echo '<br>';
    echo "------------------";
    echo '<br>';
    // not identical => test if data & data type are equal ? => (!==)
    var_dump (100 !== 100);
    echo '<br>';
    var_dump (100 !== "100");
    echo '<br>';
    var_dump(100 !== 100.0);
    echo '<br>';
    echo "------------------";
    echo '<br>';

    // Larger than & Larger than or equal
    var_dump (100 > 30);
    echo '<br>';
    var_dump (100 > 110);
    echo '<br>';
    var_dump(100 >= 100);
    echo '<br>';
    echo "------------------";
    echo '<br>';
     
    // Smaller than & Smaller than or equal
    var_dump ( 15 < 2);
    echo '<br>';
    var_dump (2 < 15);
    echo '<br>';
    var_dump(15 <= 15);
    echo '<br>';
    echo "------------------";
    echo '<br>';

    // SpaceShip [ Less than => -1 , Equal => 0 , Greater than => 1 ]
    var_dump(100 <=> 50);
    echo '<br>';
    var_dump(20 <=> 20);
    echo '<br>';
    var_dump (50 <=> 100);
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';






    // Increment ++ , Decrement -- 
    // post_increment , the addition happen after print 
    $f = 10 ;
    echo $f++ ;        // f++ => $f +1 ,  result => 10
    echo'<br>';
    echo $f ;           // result => 11
    echo '<br>';
       

    //pre_increment , but the addition happen befor print
    $t = 5;
    echo ++$t ;       // ++$t => t + 1 ,  result => 6
    echo '<br>';
    echo $t ;         // result => 6
    echo '<br>';


    // post decrement
    $z = 10 ;
    echo $z-- ;        // result => 10         
    echo '<br>';
    echo $z ;          // result => 9
    echo '<br>';


    // pre_decrement
    $u = 5;
    echo --$u ;         // result => 4        
    echo '<br>';
    echo $u ;           // result => 4
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';





   
    /*
          Logical operator
     ---- && , and => return true if all condtion are true , return false if any condition is false ...
     ---- || , or => return true if any condtion is true , return false if all of them are false ... 
     ---- xor => return true if only one condtion is true , return false if all condtion are true or all false ... 
    */
    var_dump ( 30 > 50 and 30 > 20 and 30 > 30);     
    echo '<br>';
    var_dump (15 > 10 and 20 > 15 and 20 >= 20);
    echo '<br>';
    var_dump ( 30 > 50 && 30 > 20 && 30 > 30);        
    echo '<br>';
    var_dump (15 > 10 && 20 > 15 && 20 >= 20);
    echo '<br>';
    var_dump ( 30 > 50 or 30 > 20 or 30 > 30);
    echo '<br>';
    var_dump (15 > 10 or 20 > 15 or 20 >= 20);
    echo '<br>';
    var_dump ( 30 > 50 || 30 > 20 || 30 > 30);
    echo '<br>';
    var_dump (15 > 10 || 20 > 15 || 20 >= 20);
    echo '<br>';
    var_dump ( 100 > 50 xor 100 > 60);
    echo '<br>';
    var_dump ( 50 > 20 xor 50 > 60 );
    echo '<br>';
    var_dump (20 > 50 xor 5 > 30);
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';








    // String operator
    $a1 = 'Fatma';
    $a2 = 'Emad ';
    $a3 = 'Jaber';
    echo "$a1 $a2 $a3";                    // this is way to write the variable at same line 
    echo '<br>';
    echo "{$a1} {$a2} {$a3} ";             // first & second way we cant call function or constant       
    echo '<br>';
    echo $a1.' '.$a2.' '.$a3;              // concatinate => use this way to call function or constant...
    echo '<br>';


    # Example for calling function & constant  
    define("STUDY", "Software Engineering");
    echo "$a1 $a2 $a3 $STUDY";                  //  Wrong => because there are no variable defined as $STUDY 
    echo '<br>';
    echo " {$a1} {$a2} {$a3} {STUDY}";          // Wrong => will print STUDY as string
    echo '<br>';
    echo "$a1 $a2 $a3 ".STUDY;                  // Right => concatinate will call it at right way 
    echo '<br>';
    echo " {$a1} {$a2} {$a3} ".STUDY;           // Right
    echo '<br>';
    echo $a1.' '.$a2.' '.$a3.' '.STUDY;         // Right   
    echo '<br>';

    // .=  
    $b = "University"; 
    $b .= " of";              // as => $b = $b + "of";
    $b .= " Palestine";        // as => $b = $b + "Palsetine";
    echo $b;
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';








    // Array operator [ + , == , != , <> , === ,!== ]
    $array1 = [1 => "A" , 2 => "B"];
    $array2 = [3 => "C" , 4 => "D"];
    $array3 = $array1 + $array2;
    echo"<pre>";            // union 2 array
    print_r($array1 + $array2);
    echo '<br>';
    print_r($array3);
    echo "</pre>";
    echo '<br>';
    echo "----------------------------";
    echo "<br>";
    $array4 = [1=> "100" , 2 => "200"];
    $array5 = [2=> 200 , 1=> 100];
    var_dump($array4 == $array4);            // equal => same value & key (without order & data type)
    echo '<br>';
    var_dump ($array4 != $array4);           // not equal => diffrent value or key 
    echo '<br>';
    var_dump($array4 <> $array4);            // not equal => diffrent value or key 
    echo '<br>';
    echo "------------------------------";
    echo '<br>';
    $array6 = [1=>"100", 2=>"200"];
    $array7 = [2=> 200 , 1=> 100 ];
    var_dump($array6 === $array7);            // identical => same value & key & order & data type
    echo '<br>';
    var_dump ($array6 !== $array7);           // not identical => differnt  value || key || order || data type
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';







     
    // Control Error
    # For variable

    $aaa = "Test 1";       
    @$bbb = $aaa or die("Variable not found");
    echo $bbb ;  
    /* 
      Error , $aaa not found , we can prevent error by putting @ befor $bbb ,
      and we can print message nested of error by die(); 
      */
    echo '<br>';
    echo "-------------------------";
    echo '<br>';


    # For File
    @$ff = file("text.txt") or die("File not found");
    echo "<pre>";
    print_r($ff);
    echo "</pre>";
    echo '<br>';

    # For include
    (@include("pp.php")) or die("There is no file included");
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';


    
    ?>
  </body>
</html>