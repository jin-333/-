<!DOCTYPE = html>
<html lang="ja">
    <head>
        <title>Blog</title>
        <meta charset="UTF-8">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel ="styleseet">
        <title>Blade設計</title>
    </head>
    <body>
    
    <h1>Blog Name</h1>
      <div class='posts'>
          @foreach ($posts as $post)
          <div class='post'>
              <h2 class='title'>
                  <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
              </h2>
        <p class='body'>{{ $post->body }}</p>
        </div>
        @endforeach
      </div>
      <div class='paginate'>
          {{$posts->links()}}
      </div>
    </body>
    </html>