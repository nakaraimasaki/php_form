<form method="post" action="result.php">
 <p>
 姓：<input type="text" name="姓" /><br>
 名：<input type="text" name="名" /><br>
 電話番号：<input type="text" name="1"/>　<input type="text" name="2"/>　<input type="text" name="3"/><br>
 質問カテゴリ：
 <select name="質問カテゴリ">
   <option>クレーム</option>
   <option>プレデター</option>
   <option>ラブレター</option>
   <option>適当</option>
 </select><br>
 メールアドレス：<input type="text" name="メアド前" />＠<input type="text" name="メアド後" /><br>
 性別：<input type="radio" name="性別" value="男" checked="checked" /> 男　
 <input type="radio" name="性別" value="女" /> 女<br>
 どこで知ったか：
 <input type="checkbox" name="properties" value="ネット" /> ネット
 <input type="checkbox" name="properties" value="口コミ" /> 口コミ
 <input type="checkbox" name="properties" value="その辺で" /> その辺で<br>　
 <textarea name="freeans" rows="4" cols="40">自由に意見を記述してください</textarea><br>
 住所：<input type="text" name="住所" /><br>
 <input type="submit" value="送信" />　
 <input type="reset" value="取り消し" />
 </p>
</form>
