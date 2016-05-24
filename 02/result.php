<center>

<link rel="stylesheet" href="form.css" type="text/css">

<h3 style="font-size:xx-large">お問い合わせフォーム</h3>

    <form method="post" action="end.php">
    <p class="box"></p>
    <p>
    <div class="sample" >
        <h2>下記の内容でよろしいでしょうか？</h2><br>
<h1>

 <?php
    echo "姓：".$_POST["sei"]." "."名：".$_POST["名"]."<br/>"."<br/>";
    echo "性別：".$_POST["性別"]."<br/>"."<br/>";
    echo "電話番号：".$_POST["1"]."-".$_POST["2"]."-".$_POST["3"]."<br/>"."<br/>";
    echo "メールアドレス：".$_POST["メアド前"]."＠".$_POST["メアド後"]."<br/>"."<br/>";
    echo "質問カテゴリ：".$_POST["質問カテゴリ"]."<br/>"."<br/>";
    echo "質問内容：".$_POST["freeans"]."<br/>";
?>
</h1>

</center>
