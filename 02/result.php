<html>
<center>

<link rel="stylesheet" href="form.css" type="text/css">
<head>
<h3 style="font-size:300%">お問い合わせフォーム</h3>
</head>

    <form method="post" action="end.php">
    <p class="box"></p>
    <p>
    <div class="sample" >
        <h2>下記の内容でよろしいでしょうか？</h2><br>
<ul>
        <h1>
             <li><span>氏名：</span></li>
             <?php echo $_POST["sei"]." ".$_POST["名"];?>
         </h1>

         <h1>
              <li><span>性別：</span></li>
              <?php echo $_POST["性別"];?>
          </h1>
 <?php
    echo "氏名：".$_POST["sei"]." ".$_POST["名"]."<br/>"."<br/>";
    echo "性別：".$_POST["性別"]."<br/>"."<br/>";
    echo "住所：".$_POST["住所"]."<br/>"."<br/>";
    echo "電話番号：".$_POST["1"]."-".$_POST["2"]."-".$_POST["3"]."<br/>"."<br/>";
    echo "メールアドレス：".$_POST["メアド前"]."＠".$_POST["メアド後"]."<br/>"."<br/>";
    echo "どこで知ったか：";
    if(empty($_POST['where'])==false){
        foreach ($_POST['where'] as $value) {
            switch (htmlspecialchars($value)) {
                case '1':
                    echo "ネット".",";
                    break;
                case '2':
                    echo "口コミ";
                    break;
            }
        }
    }
    echo "<br/>"."<br/>";

    echo "質問カテゴリ：".$_POST["質問カテゴリ"]."<br/>"."<br/>";
    echo "質問内容：".$_POST["freeans"]."<br/>"."<br/>"."<br/>"."<br/>"."<br/>"."<br/>";
?>
<input class="button" type="submit" value="送信" style="WIDTH: 200px; HEIGHT: 60px" />　
<INPUT class="button" type="button" value="戻る" onClick="history.back()" style="WIDTH: 200px; HEIGHT: 60px">
</h1>

</center>
</html>
