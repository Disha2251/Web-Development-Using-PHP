<?php
$vCount=0;
$str = "This is a demo sentence";  
          
$str = strtolower($str);  
for($i = 0; $i < strlen($str); $i++)
{  

    if( $str[$i] == 'a' || $str[$i] == 'e' || $str[$i] == 'i' || $str[$i] == 'o' || $str[$i] == 'u')
    {  
        $vCount++;  
    } 
} 
echo "Total number of vowels : " , $vCount; 
?>