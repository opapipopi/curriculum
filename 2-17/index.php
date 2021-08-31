<?php
$c = 0 ;
$x = 1 ;




while($x < 40){
    $y = mt_rand(1,6);
    $c +=$y ;
    echo $x.'回目'.$y.'です'.$c;
    echo '<br>';
     
    if($c>40){
        echo $c.'で終了'.$x.'回目でgoal';
        break ;
    }
    $x++ ;
}
echo '<br>';

date_default_timezone_set('Asia/Tokyo');


function getTime($nowTime){
    if($nowTime>=06&&$nowTime<=11){
        echo 'おはよう';

    }elseif($nowTime>=12&&$nowTime<=18){
        echo 'こんちゃ';

    }elseif($nowTime>=19&&$nowTime<=24){
        echo 'こんばんわ';
    }


}

getTime(07);