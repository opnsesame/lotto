<?php
ini_set('max_execution_time', 0);
$Tmatch = ['m0'=>0,'m1'=>0,'m2'=>0,'m3'=>0,'m4'=>0,'m5'=>0,'m6'=>0,'m7'=>0,'total'=>'0'];
$Tmatch1 = ['m0'=>0,'m1'=>0,'m2'=>0,'m3'=>0,'m4'=>0,'m5'=>0,'m6'=>0,'m7'=>0,'total'=>'0'];

for ($i = 1 ; $i<50 ; $i++) {
$arr49[] = $i;
}

$arr2 = [3,8,12,28,33,42,46];
$totalRun = 0;
for ($t=0 ; $t<1500000; $t++){
$totalRun = $t + 1;
$win649key = array_rand($arr49,7);
$win649key1 = array_rand($arr49,7);

for ($i=0 ; $i<7 ; $i++){
    $arr1[] = $arr49[$win649key[$i]];
}
for ($i=0 ; $i<7 ; $i++){
    $arr3[] = $arr49[$win649key1[$i]];
}

$match = 0;
$match1 = 0;
for ($i=0 ; $i<7; $i++){
    for ($j=0; $j<7;$j++){

      if ($arr1[$i] == $arr3[$j]){
     $match1 = $match1 +1;
      }

        if ($arr1[$i] == $arr2[$j]){
       $match = $match +1;
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
           case 7;
                $Tmatch['m7'] = $Tmatch['m7'] +1;
   }

   switch ($match1) {
           case 0;
                $Tmatch1['m0'] =  $Tmatch1['m0']+1;

                 break;
           case 1;
                $Tmatch1['m1'] = $Tmatch1['m1'] +1;

           break;
           case 2;
                $Tmatch1['m2'] = $Tmatch1['m2'] +1;

           break;
           case 3;
                $Tmatch1['m3'] = $Tmatch1['m3'] +1;

           break;
           case 4;
                $Tmatch1['m4'] = $Tmatch1['m4'] +1;

           break;
           case 5;
                $Tmatch1['m5'] = $Tmatch1['m5'] +1;

           break;
           case 6;
                $Tmatch1['m6'] = $Tmatch1['m6'] +1;
           break;
           case 6;
                $Tmatch1['m7'] = $Tmatch1['m7'] +1;


   }


$Tmatch['total'] = $totalRun;

    unset($arr1);
    unset($arr3);

}
echo '<table style="width:100%">';
echo '<tr>';
  echo '<td width="10%">'.'0'.'</td>';
  echo '<td width="10%">'.'1'.'</td>';
  echo '<td width="10%">'.'2'.'</td>';
  echo '<td width="10%">'.'3'.'</td>';
  echo '<td width="10%">'.'4'.'</td>';
  echo '<td width="10%">'.'5'.'</td>';
  echo '<td width="10%">'.'6'.'</td>';
  echo '<td width="10%">'.'7'.'</td>';
  echo '<td width="10%">'.'total'.'</td>';
echo '</tr>';
echo '<tr>';
  echo '<td width="10%">'.$Tmatch['m0'].'</td>';
  echo '<td width="10%">'.$Tmatch['m1'].'</td>';
  echo '<td width="10%">'.$Tmatch['m2'].'</td>';
  echo '<td width="10%">'.$Tmatch['m3'].'</td>';
  echo '<td width="10%">'.$Tmatch['m4'].'</td>';
  echo '<td width="10%">'.$Tmatch['m5'].'</td>';
  echo '<td width="10%">'.$Tmatch['m6'].'</td>';
  echo '<td width="10%">'.$Tmatch['m7'].'</td>';
  echo '<td width="10%">'.$Tmatch['total'].'</td>';
echo '</tr>';
echo '<tr>';
  echo '<td width="10%">'.$Tmatch1['m0'].'</td>';
  echo '<td width="10%">'.$Tmatch1['m1'].'</td>';
  echo '<td width="10%">'.$Tmatch1['m2'].'</td>';
  echo '<td width="10%">'.$Tmatch1['m3'].'</td>';
  echo '<td width="10%">'.$Tmatch1['m4'].'</td>';
  echo '<td width="10%">'.$Tmatch1['m5'].'</td>';
  echo '<td width="10%">'.$Tmatch1['m6'].'</td>';
  echo '<td width="10%">'.$Tmatch1['m7'].'</td>';
  echo '<td width="10%">'.$Tmatch1['total'].'</td>';
echo '</tr>';
echo '</table>';
