<?php 
/*
$i = 1;
while ($i < 13) :
    echo $i;
    echo '<br>';
    $i++; 
endwhile; 


do {
    echo $i;
    echo '<br>';
    $i++; 
}
while ($i < 13);
*/

for ($i=1; $i <=5 ; $i++) {
    echo "$i <br>";
}

$index=10;
for ( ; ; $index--) :
    if ($index == 0 ){
        break;
    }
    echo "$index<br>";
endfor;


$countries = ["Palestine" , "Egypt" , "Spain" , "USA"];
echo '<pre>';
echo '<br>';
print_r ($countries);
echo '</pre>';

foreach($countries as $Country){
    echo $Country."<br>";
}

$country_with_dis = ["Palestine" => 50 , "Egypt" => 40 , "Spain"=>20 , "USA"=>10 ];
echo '<pre>';
echo '<br>';
print_r ($country_with_dis);
echo '</pre>';

foreach($country_with_dis as $Country => $discount):
    echo "The country is $Country and the discount = $discount <br>";
endforeach;

echo '-------------------------------';
echo '<br>';

foreach($country_with_dis as $Country => $discount):
    
    if ($Country == 'Spain'){
        break;
    }
    echo "The country is $Country and the discount = $discount <br>";
endforeach;
echo '-------------------------------';
echo '<br>';






foreach($country_with_dis as $Country => $discount):
    
    if ($Country == 'Spain'){
        continue;
    }
    echo "The country is $Country and the discount = $discount <br>";
endforeach;



echo '<br>';
echo '<br>';
echo '<br>';


include_once("test.php");
echo $a;
echo '<br>';

$a = "PhP" ; 
include_once("test.php");
echo $a;



echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';