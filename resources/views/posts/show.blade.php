<!DOCTYPE = html>
<html lang="ja">
    <head>
        <title>Blog</title>
        <meta charset="UTF-8">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel ="styleseet">
        <title>Posts</title>
    </head>
    <body>
    <div class="edit"><a href="/posts/{{ $post->id }}/edit">edit</a></div>
    <h1 class="title">
        {{ $post->title }}
    </h1>
      <div class="content">
          <div class="content_post">
              <h3>本文</h3>
              <p> {{ $post->body }} </p> 
          </div>
     　</div>
     　<div class="footer">
     　 <a href="/">戻る</a>  
     　</div>
      
    </body>
    </html>