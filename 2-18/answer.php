<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="css/answer.css">
</head>

<body>
    


<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$name = $_POST['answer_name'];
$answer1 = $_POST['answer1'];
$answer2 = $_POST['answer2'];
$answer3 = $_POST['answer3'];
$user_answer1 = $_POST['a1'];
$user_answer2 = $_POST['a2'];
$user_answer3 = $_POST['a3'];



//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
function getAnswer ($ua,$answer){
    if($ua==$answer){
        echo '正解!';

    }elseif($ua==''){
        echo '回答してください';
        
        
    }
    else{
        echo '残念';
    }

}



?>
<p><!--POST通信で送られてきた名前を表示--><?php echo $name?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<p><?php getAnswer($user_answer1,$answer1);?></p>
<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<p><?php getAnswer($user_answer2,$answer2);?></p>
<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<p><?php getAnswer($user_answer3,$answer3);?></p>

</body>

</html>