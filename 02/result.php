<center>
<link rel="stylesheet" href="form.css" type="text/css">

<h3 style="font-size:xx-large">こちらの内容でよろしいでしょうか？</h3>

<form method="post" action="end.php">
    <p class="box"></p>
    <p>
    <div class="sample" >
     <div class="note" >
         <input type="submit" value="送信" />　
         <input type="reset" value="取り消し" />
</div>
</div>
</h4>
</p>
</form>
</center>

php?>
echo "質問カテゴリ：".$_POST["質問カテゴリ"]."<br/>";
echo "質問内容：".$_POST["freeans"]."<br/>";
?>
