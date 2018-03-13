<?php
ini_set('max_execution_time', 0);
$Tmatch = ['m0'=>0,'m1'=>0,'m2'=>0,'m3'=>0,'m4'=>0,'m5'=>0,'m6'=>0,'m7'=>0,'total'=>'0'];
$totalMatch = [0,0,0,0,0,0,0,0];
for ($i = 1 ; $i<50 ; $i++) {
$arr49[] = $i;
}

$arr2 = [3,8,12,28,33,42,46];
$totalRun = 0;
for ($t=0 ; $t<100000; $t++){
$totalRun = $t + 1;
$win649key = array_rand($arr49,7);
//$win649key1 = array_rand($arr49,7);

for ($i=0 ; $i<7 ; $i++){
  //  echo $win649key[$i].'<br/>';
    $arr1[] = $arr49[$win649key[$i]];
//    $arr49[$win649key[$i]];

}

$match = 0;
for ($i=0 ; $i<7; $i++){
    for ($j=0; $j<7;$j++){

        if ($arr1[$i] == $arr2[$j]){

       $match = $match +1;
     break;
        }
    }
}

   switch ($match) {
           case 0;
                $Tmatch['m0'] =  $Tmatch['m0']+1;

                 break;
           case 1;
                $Tmatch['m1'] = $Tmatch['m1'] +1;

           break;
           case 2;
                $Tmatch['m2'] = $Tmatch['m2'] +1;

           break;
           case 3;
                $Tmatch['m3'] = $Tmatch['m3'] +1;

           break;
           case 4;
                $Tmatch['m4'] = $Tmatch['m4'] +1;

           break;
           case 5;
                $Tmatch['m5'] = $Tmatch['m5'] +1;

           break;
           case 6;
                $Tmatch['m6'] = $Tmatch['m6'] +1;

           break;
 //          case 7;

  //         echo '7匹配的有'.$Tmatch['m7'];
   }

$Tmatch['total'] = $totalRun;

    unset($arr1);
//    unset($arr2);

}

var_dump($Tmatch);
