<center>

<link rel="stylesheet" href="form.css" type="text/css">

<h3 style="font-size:xx-large">お問い合わせフォーム</h3>
<h4 style="font-size:x_large">






<form method="post" action="result.php">
<p class="box"></p>
<p>
<div class="sample" >
<ul>
 <h1><li><span>姓(5文字まで)：</span></li><input type="text" name="sei" size="5" style="WIDTH: 200px; HEIGHT: 40px"/></h1>
 <h1><li><span>名(5文字まで)：</span></li><input type="text" name="名" size="5" style="WIDTH: 200px; HEIGHT: 40px"/></h1>
 <h1><li><span>性別：</span></li><input type="radio" name="性別" value="男" checked="checked" style="WIDTH: 40px; HEIGHT: 40px"/>男
 <input type="radio" name="性別" value="女" checked="checked" style="WIDTH: 40px; HEIGHT: 40px"/>女
　<input type="radio" name="性別" value="不明" checked="checked" style="WIDTH: 40px; HEIGHT: 40px"/>不明</h1><h1><li><span>住所：</span></li><input type="text" name="住所" size="5" style="WIDTH: 200px; HEIGHT: 40px"/></h1>
　<h1><li><span>電話番号：</span></li><input type="text" name="1" size="4" style="WIDTH: 60px; HEIGHT: 40px"/>-
 <input type="text" name="2" size="4" style="WIDTH: 60px; HEIGHT: 40px"/>-
 <input type="text" name="3" size="4" style="WIDTH: 60px; HEIGHT: 40px"/></h1>
 <h1><li><span>メールアドレス：</span></li><input type="text" name="メアド前" size="40" style="WIDTH: 120px; HEIGHT: 40px"/>＠
 <input type="text" name="メアド後" size="20" style="WIDTH: 120px; HEIGHT: 40px"/></h1>
 <h1><li><span>どこで知ったか(必須)：</span></li><input type="checkbox" name="where[]" value="ネット" style="WIDTH: 40px; HEIGHT: 40px"/>ネット
 <input type="checkbox" name="where[]" value="口コミ" style="WIDTH: 40px; HEIGHT: 40px"/>口コミ</h1>
 <h1><li><span>質問カテゴリ：</span></li>
 <select name="質問カテゴリ" style="WIDTH: 150px; HEIGHT: 40px">
   <option>クレーム</option>
   <option>プレデター</option>
   <option>ラブレター</option>
   <option>適当</option>
 </select></h1>　<h1><li><span>質問内容：</span></li>
 <textarea name="freeans" rows="4" cols="40">質問を記入してください。</textarea></h1><br>
 <input type="submit" value="送信" style="WIDTH: 400px; HEIGHT: 60px" />　
 <input type="reset" value="取り消し" style="WIDTH: 200px; HEIGHT: 60px" />
 </ul>
 </div>
 </h4>
 </p>
</form>
</center>
