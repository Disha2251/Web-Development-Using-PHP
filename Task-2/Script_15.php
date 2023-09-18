<?php
      $num1=20;
      $num2=15;
      $num3=22;

      if($num1>$num2 && $num1>$num3)
      {
        echo "$num1 is greatest";
      }
      else
      {
        if($num2>$num1 && $num2>$num3)
        {
          echo "$num2 is greatest";
        }
        else
          echo "$num3 is greatest";
      }
?>