<?php
$Tmatch = ['m0'=>0,'m1'=>0,'m2'=>0,'m3'=>0,'m4'=>0,'m5'=>0,'m6'=>0,'m7'=>0,'total'=>'0'];
$totalMatch = [0,0,0,0,0,0,0,0];
for ($i = 1 ; $i<50 ; $i++) {
$arr49[] = $i;
}
/*
$arr49b = ['k0' => '1',
  'k1' => '2',
  'k2' => '3',
  'k3' => '4',
  'k4' => '5',
  'k5' => '6',
  'k6' => '7',
  'k7' => '8',
  'k8' => '9',
  'k9' => '10',
  'k10' => '11',
  'k11' => '12',
  'k12' => '13',
  'k13' => '14',
  'k14' => '15',
  'k15' => '16',
  'k16' => '17',
  'k17' => '18',
  'k18' => '19',
  'k19' => '20',
  'k20' => '21',
  'k21' => '22',
  'k22' => '23',
  'k23' => '24',
  'k24' => '25',
  'k25' => '26',
  'k26' => '27',
  'k27' => '28',
  'k28' => '29',
  'k29' => '30',
  'k30' => '31',
  'k31' => '32',
  'k32' => '33',
  'k33' => '34',
  'k34' => '35',
  'k35' => '36',
  'k36' => '37',
  'k37' => '38',
  'k38' => '39',
  'k39' => '40',
  'k40' => '41',
  'k41' => '42',
  'k42' => '43',
  'k43' => '44',
  'k44' => '45',
  'k45' => '46',
  'k46' => '47',
  'k47' => '48',
  'k48' => '49'];
  */

$totalRun = 0;
for ($t=0 ; $t<50000; $t++){
$totalRun = $t + 1;
$win649key = array_rand($arr49,7);
$win649key1 = array_rand($arr49,7);
//var_dump($win649key);
//echo $win649key[0];
echo '<table sytle="width:100%">';
    echo '<tr>';
     echo '第      '.$totalRun.'     次'.'--------------------------------------------------------------------------'.'<br/>';
    echo '</tr>';
echo '<tr>';
for ($i=0 ; $i<7 ; $i++){
  //  echo $win649key[$i].'<br/>';
    $arr1[] = $arr49[$win649key[$i]];
    echo '<td width="16%">      '.$arr49[$win649key[$i]].'        </td>';
   
}
echo '</tr>';
 //   var_dump($arr1);
for ($i=0 ; $i<7 ; $i++){
  //  echo $win649key1[$i].'<br/>';
    $arr2[] = $arr49[$win649key1[$i]];
    echo '<td width="16%">      '.$arr49[$win649key1[$i]].'        </td>';
   
}
    
 //   var_dump($arr1);
 //   var_dump($arr2);

//var_dump($totalMatch);
$match = 0;
for ($i=0 ; $i<7; $i++){
    for ($j=0; $j<7;$j++){
       // echo $arr1[$i].'       '.$arr2[$j].'<br />';
        if ($arr1[$i] == $arr2[$j]){
            echo '['.$arr1[$i].']'.'  ';
       $match = $match +1;
     break;
        }    
    }      
}
    echo '<tr>';
   switch ($match) {
           case 0;
                $Tmatch['m0'] =  $Tmatch['m0']+1;
           echo '0匹配的有'.$Tmatch['m0'];
                 break;
           case 1;
                $Tmatch['m1'] = $Tmatch['m1'] +1;
           echo '1匹配的有'.$Tmatch['m1'];
           break;
           case 2;
                $Tmatch['m2'] = $Tmatch['m2'] +1;
           echo '2匹配的有'.$Tmatch['m2'];
           break;
           case 3;
                $Tmatch['m3'] = $Tmatch['m3'] +1;
           echo '3匹配的有'.$Tmatch['m3'];
           break;
           case 4;
                $Tmatch['m4'] = $Tmatch['m4'] +1;
           echo '4匹配的有'.$Tmatch['m4'];
           break;
           case 5;
                $Tmatch['m5'] = $Tmatch['m5'] +1;
           echo '5匹配的有'.$Tmatch['m5'];
           break;
           case 6;
                $Tmatch['m6'] = $Tmatch['m6'] +1;
           echo '6匹配的有'.$Tmatch['m6'];
           break;
           case 7;
                $Tmatch['m7'] = $Tmatch['m7'] +1;
           echo '7匹配的有'.$Tmatch['m7'];
   }
    echo '</tr>'.'<br/>';
//$totalMatch[$match] = $totalMatch[$match] + 1;
           echo '匹配数目：'.$match.'<br />'; 
//    var_dump($match);
$Tmatch['total'] = $totalRun;

    unset($arr1);
    unset($arr2);
       
}
echo '</table>';
//var_dump($arr49);
//var_dump ($arr1);
//var_dump ($arr2);

//var_dump($totalMatch);  
var_dump($Tmatch);
