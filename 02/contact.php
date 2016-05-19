<center>
<div style="background:aqua;color:black;">
<h3 style="font-size:x-large">お問い合わせフォーム</h3>
<div style="background:aqua;color:black;">
<form method="post" action="result.php">
 <p>

 姓：<input type="text" name="姓" size="5"/><br><br>
 名：<input type="text" name="名" size="5"/><br><br>
 性別：<input type="radio" name="性別" value="男" checked="checked" /> 男　
 <input type="radio" name="性別" value="女" /> 女 <input type="radio" name="性別" value="不明" checked="checked" /> 不明<br><br>
 住所：<input type="text" name="住所" size=40/><br><br>
 電話番号：<input type="text" name="1" size="4"/>-<input type="text" name="2" size="4"/>-<input type="text" name="3" size="4"/><br><br>
 メールアドレス：<input type="text" name="メアド前" />＠<input type="text" name="メアド後" /><br><br>
 どこで知ったか：
 <input type="checkbox" name="where[]" value="ネット" /> ネット
 <input type="checkbox" name="where[]" value="口コミ" /> 口コミ
 <input type="checkbox" name="where[]" value="その辺で" /> その辺で<br><br>
 質問カテゴリ：
 <select name="質問カテゴリ">
   <option>クレーム</option>
   <option>プレデター</option>
   <option>ラブレター</option>
   <option>適当</option>
 </select><br><br>　
 質問内容：<textarea name="freeans" rows="4" cols="40">質問を記入してください。</textarea><br><br>
 <input type="submit" value="送信" />　
 <input type="reset" value="取り消し" />
 </p>
</form>
<center/>
