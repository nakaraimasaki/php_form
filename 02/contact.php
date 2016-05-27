<html>
<center>　<!--真ん中寄せ-->

<!--form.css読み込み-->
<link rel="stylesheet" href="form.css" type="text/css">

<!--タイトル-->
<head>
<h3 style="font-size:300%">お問い合わせフォーム</h3>
<h4 style="font-size:x_large">
</head>

<form method="post" action="result.php">
<!--フォーム、背景画像表示-->
<div class="sample">
<ul>

 <h1>
     <li><span>姓(必須)：</span></li>
     <li1><input type="text" name="sei" placeholder="例:十六" size="5" maxlength="5" style="WIDTH: 150px; HEIGHT: 40px;font-size:30px" required/></li1>
 </h1>

 <h1>
     <li><span>名(必須)：</span></li>
     <li1><input type="text" name="名" placeholder="例:茶"　size="5" maxlength="5" style="WIDTH: 150px; HEIGHT: 40px;font-size:30px"required/></li1>
 </h1>

 <h1>
     <li><span>性別(必須)：</span></li>
     <li1><input type="radio" name="性別" value="男" checked="checked" style="WIDTH: 40px; HEIGHT: 40px"required/>男
     <input type="radio" name="性別" value="女" checked="checked" style="WIDTH: 40px; HEIGHT: 40px"required/>女
　    <input type="radio" name="性別" value="不明" checked="checked" style="WIDTH: 40px; HEIGHT: 40px"required/>不明</li1>
</h1>

<h1>
    <li><span>住所(必須)：</span></li>
    <li1><input type="text" name="住所" placeholder="例:東京都神奈川区群馬県" size="40" maxlength="40"style="WIDTH: 900px; HEIGHT: 40px;font-size:30px"required/></li1>
</h1>
<h1>
    <li><span>電話番号(必須)：</span></li>
    <li1><input type="text" name="1" pattern="^[0-9]+$" placeholder="例:5963"　size="4" maxlength="5" style="WIDTH: 120px; HEIGHT: 40px;font-size:30px; ime-mode: disabled;"required/>-
    <input type="text" name="2" pattern="^[0-9]+$" placeholder="例:5963" size="4" maxlength="5" style="WIDTH: 120px; HEIGHT: 40px;font-size:30px; ime-mode: disabled;"required/>-
    <input type="text" name="3" pattern="^[0-9]+$" placeholder="例:5963" size="4" maxlength="5" style="WIDTH: 120px; HEIGHT: 40px;font-size:30px; ime-mode: disabled;"required/></li1>
</h1>

 <h1>
    <li><span>メールアドレス(必須)：</span></li>
     <li1><input type="text" name="mail" pattern="^[0-9A-Za-z]+$" placeholder="例:kd1234567" size="40" maxlength="35" style="WIDTH: 600px; HEIGHT: 40px;font-size:30px"required/>＠
     <input type="text" name="address" pattern="^[0-9A-Za-z]+$" placeholder="例:st.kobedenshi.ac.jp" size="20" maxlength="17" style="WIDTH: 300px; HEIGHT: 40px;font-size:30px"required/></li1>
 </h1>

 <h1>
     <li><span>どこで知ったか(任意)：</span></li>
     <li1><label><input type="checkbox" name="where[]" value="1" style="WIDTH: 40px; HEIGHT: 40px"/>ネット</label>
     <label><input type="checkbox" name="where[]" value="2" style="WIDTH: 40px; HEIGHT: 40px"/>口コミ</label>
     <label><input type="checkbox" name="where[]" value="3" style="WIDTH: 40px; HEIGHT: 40px"/>あの辺で</label>
     <label><input type="checkbox" name="where[]" value="4" style="WIDTH: 40px; HEIGHT: 40px"/>その辺で</label></li1>
</h1>
<h1>
     <li><span>質問カテゴリ(必須)：</span></li>
     <li1><select name="質問カテゴリ" style="WIDTH: 150px; HEIGHT: 40px;font-size:30px"/>
     <option>クレーム</option>
     <option>感想</option>
     <option>お世辞</option>
     <option>適当</option></select></li1></h1>　
    <h1><li><span>  質問内容(必須)：</span></li><li1><textarea name="freeans"  placeholder="例:お疲れ様です。" rows="4" cols="60" maxlength="120" style="font-size:30px" required></textarea></li1></h1>

 <input class="button" type="submit" value="送信" style="WIDTH: 600px; HEIGHT: 60px"/>　
 <input class="button" type="reset" value="リセット" style="WIDTH: 200px; HEIGHT: 60px"/>
 </ul>
 </div>
 </h4>
 </p>
</form>
</center>
</html
