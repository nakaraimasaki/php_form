<html>
<center>

<link rel="stylesheet" href="form.css" type="text/css">
<head>
<h3 style="font-size:300%">お問い合わせフォーム</h3>
</head>

    <form method="post" action="end.php">
    <p class="box"></p>
    <p>
    <div class="sample1" >
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

          <h1>
               <li><span>住所：</span></li>
               <?php echo $_POST["住所"];?>
           </h1>

           <h1>
                <li><span>電話番号：</span></li>
                <?php echo $_POST["1"]."-".$_POST["2"]."-".$_POST["3"];?>
            </h1>

            <h1>
                 <li><span>メールアドレス：</span></li>
                 <?php echo $_POST["mail"]."＠".$_POST["address"];?>
             </h1>

             <h1>
                  <li><span>どこで知ったか：</span></li>
                  <?php if(empty($_POST['where'])==false){
                      foreach ($_POST['where'] as $value) {
                          switch (htmlspecialchars($value)) {
                              case '1':
                                  echo "ネット"."  ";
                                  break;
                              case '2':
                                  echo "口コミ"."  ";
                                  break;
                                  case '3':
                                        echo "あの辺で"."  ";
                                        break;
                                          case '4':
                                                echo "その辺で";
                                                break;
                          }
                      }
                  }
                  ?>
              </h1>

              <h1>
                   <li><span>質問カテゴリ：</span></li>
                   <?php echo $_POST["質問カテゴリ"];?>
               </h1>

               <h1>
                    <li><span>質問内容：</span></li>
                    <?php echo $_POST["freeans"];?>
                </h1>
<input class="button" type="submit" value="送信" style="WIDTH: 600px; HEIGHT: 60px" />　
<INPUT class="button" type="button" value="戻る" onClick="history.back()" style="WIDTH: 200px; HEIGHT: 60px">
</h1>

</center>
</html>
