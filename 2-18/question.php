<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="css/question.css">
</head>
<body>

<?php
//POST送信で送られてきた名前を受け取って変数を作成
$name = $_POST['name'];

//①画像を参考に問題文の選択肢の配列を作成してください。
$quwstion1=["80","22","20","21"];
$quwstion2=["PHP","Python","JAVA","HTML"];
$quwstion3=["join","select","insert","update"];

//② ①で作成した、配列から正解の選択肢の変数を作成してください
$answer1 = $quwstion1[2];
$answer2 = $quwstion2[3];
$answer3 = $quwstion3[1];

?>

<p>お疲れ様です<!--POST通信で送られてきた名前を出力-->
<?php echo $name ?>さん</p>
<!--フォームの作成 通信はPOST通信で-->
<form action="answer.php" method="POST">
<h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php  foreach($quwstion1 as $value) {
    echo '<input type="radio" name="a1" value='.$value.'>';
    echo $value;

}
?>


<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php  foreach($quwstion2 as $value) {
    echo '<input type="radio" name="a2" value='.$value.'>';
    echo $value;

}
?>


<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php  foreach($quwstion3 as $value) {
    echo '<input type="radio" name="a3" value='.$value.'>';
    echo $value;

}
?>
<br>
<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
<input type="hidden" name="answer_name" value="<?php echo $name ;?>">
<input type="hidden" name="answer1" value="<?php echo $answer1 ;?>">
<input type="hidden" name="answer2" value="<?php echo $answer2 ; ?>">
<input type="hidden" name="answer3" value="<?php echo $answer3 ; ?>">

<input type="submit" value="回答する">

</form>


    
</body>


</html>