<?php
echo "氏名：".$_POST["姓"]." ".$_POST["名"]."<br/>";
echo "性別：".$_POST["性別"]."<br/>";
echo "住所：".$_POST["住所"]."<br/>";
echo "電話番号：".$_POST["1"]."-".$_POST["2"]."-".$_POST["3"]."<br/>";
echo "メールアドレス：".$_POST["メアド前"].$_POST["メアド後"]."<br/>";
$checkbox = $_POST["where"];
echo "どこで知ったか：";
for($i=0; $i<sizeof($checkbox); $i++){
echo "${checkbox[$i]}".",";
}
echo "<br/>";
echo "質問カテゴリ：".$_POST["質問カテゴリ"]."<br/>";
echo "質問内容：".$_POST["freeans"]."<br/>";
?>
