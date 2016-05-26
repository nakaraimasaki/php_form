<html>
<center>

<link rel="stylesheet" href="form.css" type="text/css">
<head>
<h3 style="font-size:300%">お問い合わせフォーム</h3>
<h4 style="font-size:x_large">
</head>

<form method="post" action="result.php">
<div class="sample" >
<ul>

 <h1>
     <li><span>姓：</span></li>
     <input type="text" name="sei" placeholder="例:なんとか" size="5" maxlength="5" style="WIDTH: 150px; HEIGHT: 40px;font-size:30px" required/>
 </h1>

 <h1>
     <li><span>名：</span></li>
     <input type="text" name="名" placeholder="例:なんとか"　size="5" maxlength="5" style="WIDTH: 150px; HEIGHT: 40px;font-size:30px"required/>
 </h1>

 <h1>
     <li><span>性別：</span></li>
     <input type="radio" name="性別" value="男" checked="checked" style="WIDTH: 40px; HEIGHT: 40px"required/>男
     <input type="radio" name="性別" value="女" checked="checked" style="WIDTH: 40px; HEIGHT: 40px"required/>女
　    <input type="radio" name="性別" value="不明" checked="checked" style="WIDTH: 40px; HEIGHT: 40px"required/>不明
</h1>

<h1>
    <li><span>住所：</span></li>
    <input type="text" name="住所" placeholder="例:その辺" size="40" maxlength="40"style="WIDTH: 900px; HEIGHT: 40px;font-size:30px"required/>
</h1>

　<h1>
    <li><span>電話番号：</span></li>
    <input type="text" name="1" id="onlyNum" placeholder="例:0000"　size="2" maxlength="4" style="WIDTH: 120px; HEIGHT: 40px;font-size:30px; ime-mode: disabled;"required/>-
    <input type="text" name="2" id="onlyNum" placeholder="例:1111" size="4" maxlength="4" style="WIDTH: 120px; HEIGHT: 40px;font-size:30px; ime-mode: disabled;"required/>-
    <input type="text" name="3" id="onlyNum" placeholder="例:2222" size="4" maxlength="4" style="WIDTH: 120px; HEIGHT: 40px;font-size:30px; ime-mode: disabled;"required/>
</h1>

 <h1>
     <li><span>メールアドレス：</span></li>
     <input type="text" name="メアド前"  placeholder="例:なんとかなんとか" size="40" maxlength="35" style="WIDTH: 600px; HEIGHT: 40px;font-size:30px"required/>＠
     <input type="text" name="メアド後"  placeholder="例:なんとかなんとか" size="20" maxlength="19" style="WIDTH: 300px; HEIGHT: 40px;font-size:30px"required/>
 </h1>

 <h1>
     <li><span>どこで知ったか(必須)：</span></li>
     <label><input type="checkbox" name="where[]" value="1" style="WIDTH: 40px; HEIGHT: 40px"/>ネット</label>
     <label><input type="checkbox" name="where[]" value="2" style="WIDTH: 40px; HEIGHT: 40px"/>口コミ</label>
     <label><input type="checkbox" name="where[]" value="3" style="WIDTH: 40px; HEIGHT: 40px"/>あの辺で</label>
     <label><input type="checkbox" name="where[]" value="5" style="WIDTH: 40px; HEIGHT: 40px"/>その辺で</label>
</h1>

 <h1>
     <li><span>質問カテゴリ：</span></li>
     <select name="質問カテゴリ" style="WIDTH: 150px; HEIGHT: 40px;font-size:30px ">
     <option>クレーム</option>
     <option>プレデター</option>
     <option>ラブレター</option>
     <option>適当</option>
 </select>
</h1>　

<h1>
    <li><span>質問内容：</span></li>
    <textarea name="freeans"  placeholder="例:なんとかなんとか" rows="4" cols="60" maxlength="120" style="font-size:30px" required></textarea>
</h1><br>

 <input class="button" type="submit" value="送信" style="WIDTH: 600px; HEIGHT: 60px"/>　
 <input class="button" type="reset" value="リセット" style="WIDTH: 200px; HEIGHT: 60px"/>
 </ul>
 </div>
 </h4>
 </p>
</form>
</center>
</html
