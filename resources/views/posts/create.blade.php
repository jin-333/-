<!DOCTYPE = html>
<html lang="ja">
    <head>
        <title>ブログ投稿</title>
        <meta charset="UTF-8">
        <!--Fonts-->
         <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel ="styleseet">
    </head>
    <body>
       <from action="/posts" method="get">
           @csrf
           <div class="title">
            <p>タイトル:</p>
             <input type="text" name="post[title]" placeholder="タイトル"/><br>
           </div>
           <div class="body"></div>
            <p>メッセージ:</p>
             <textarea name="post[body]" placeholder="投稿内容を入力"/> </textarea><br>
             <input type="submit" value="store"/><br>
           <p></p>
           <input type="reset" value="取消"/><br>
           </div>
       </from> 
       <div class=footer>
        <a href="/">投稿画面へ戻る</a>
        </div>
    </body>
</html>