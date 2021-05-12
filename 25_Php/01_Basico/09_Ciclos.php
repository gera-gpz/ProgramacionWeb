<?php


    $y=0;
    while($y<=10) 
    { echo "While Linea ",$y,"<br>"; 
      $y++;  
    }


    $z=0;
    do { echo "Do While Linea ",$z,"<br>"; 
         $z++;
        }
    while($z<=10);



	$a=0;
	$b=1;
    printf('Hello World<br>');
    printf('La variable a ='.$a.'<br>');

	for($x=0; $x<10; $x++)
	   {	print 'x vale '.$x.'<br>'; }



    $array = array(1,2,3,4,5,6,7,8,9,10);
    foreach ($array as $elemento)
               {
               echo $elemento.'<br>';
               }

    $arraya= array(1=>'Elemento1',2=>'Elemento2',3=>'Elemento3');
    foreach ($arraya as $indice=>$elemento)
           {
           echo $indice.' - '.$elemento.'<br>';
           }

?>