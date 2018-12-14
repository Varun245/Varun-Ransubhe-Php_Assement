<?php

$array=$argv[2];

$newArray=explode(",",$array);

$count=count($newArray);



if($argv[1]=="add")
{

  $sum=0;
  for($i=0;$i<$count;$i++)
  {
      $sum=$sum+$newArray[$i];
  }


  echo $sum. PHP_EOL;

}
else if($argv[1]=="sub")
{
    $sub=0;
    for($i=0;$i<$count;$i++)
    {
       if($i==0)
       {
           $sub=$newArray[$i];
       }  
       else{
           $sub=$sub-$newArray[$i];
       }
    }

    echo $sub. PHP_EOL;
  
}
else if($argv[1]=="mul")
{
    $mul=1;
    for($i=0;$i<$count;$i++)
    {
       $mul=$mul*$newArray[$i];
    }

    echo $mul. PHP_EOL;
  
}
else if($argv[1]=="div")
{
    $div=$newArray[0];
    for($i=1;$i<$count;$i++)
    {
       $div=$div/$newArray[$i];
    }

    echo $div . PHP_EOL;
  
}
